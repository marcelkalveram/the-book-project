<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Proposals Controller
 *
 * @property Proposal $Proposal
 * @property PaginatorComponent $Paginator
 */
class ProposalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Counter', 'Session');
	public $helpers = array('Rating');

/**
  * beforeFilter
  * Set pagination parameters
  */
	public function beforeFilter() {

		parent::beforeFilter();

		$this->Paginator->settings = array(
        	'conditions' => array('Proposal.confirmed' => true, 'Proposal.selected' => true, 'Proposal.created >' => '2014-01-01 00:00:00'),
        	'limit' => 100,
        	'order' => 'Proposal.created DESC'
    	);

	}

/**
  * index page
  */
	public function index() {

		$this->Proposal->recursive = 0;
		$this->set('proposals', $this->Paginator->paginate());
	}

/**
  * about page
  */
	public function about() {

	}

/**
  * participate page
  */
	public function participate() {

		$unlocked = false;
		$length = 0;

		if ($this->request->is('post')) {

			$success = $this->Proposal->save($this->request->data);

			$length = strlen ( $this->request->data['Proposal']['text'] );
			$unlocked = $length  > 100;

			if ($success) {

				// send email
				$this->_sendNotificationEmail( $this->request->data, 'proposal', 'Ha llegado una nueva propuesta' );

				// send thank you mail to user
				$this->_sendNotificationEmail( null, 'thankyou', 'Gracias por tu colaboración', $this->request->data['Proposal']['email'] );

				$this->set('success', $success);

			}

		}

		$this->Proposal->recursive = 0;
		$this->set('proposals', $this->Paginator->paginate());

		$this->set( compact('unlocked', 'length') );

	}

/**
 * accept page
 * Users that have already sent us a proposal can accept the conditions on this page
 * @param $string email address of the user whose text to approve
 * @param $string hash of a user that will identifies his text
 */
	public function accept($email = null, $hash = null) {

		// if no parameters passed, return
		if ( ! isset($email) || ! isset($hash)) {
			return;
		}

		// find proposal
		$options = array('conditions' => array('Proposal.hash' => $hash, 'Proposal.email' => $email));
		$proposal = $this->Proposal->find('first', $options);

		if (empty($proposal)) {
			return;
		}

		$this->set(compact('proposal'));

		// if nothing posted, return
		if ( ! $this->request->is('post')) {
			return;
		}

		if ( $this->request->data['Proposal']['conditions'] == true ) {
			$this->Proposal->id = $proposal['Proposal']['id'];
			$this->Proposal->saveField('conditions', true);
			$this->set('success', true);
			return;
		}

		$this->Proposal->validationErrors = array('conditions' => 'Tienes que aceptar las condiciones para enviar tu propuesta');
		$this->set('success', false);

	}


/**
  * proposals page
  */
	public function proposals() {

		$this->_updateProposalsCount();

		$this->Proposal->recursive = 0;
		$this->set('proposals', $this->Paginator->paginate());
	}

/**
  * proposal page: Show a single proposal for Social Media to like and share
  */
	public function single($id) {

		if ( ! $this->Proposal->exists($id)) {
			return;
		}

		$proposal = $this->Proposal->findById($id);
		$this->set(compact('proposal'));

	}

/**
  * contact page
  */
	public function contact() {

		$this->loadModel('Contact');

		if ($this->request->is('post')) {
			$success = $this->Contact->save( $this->request->data );
			if ($success) {
				$this->_sendNotificationEmail( $this->request->data, 'contact', 'Alguien quiere contactar con nosotros' );
				$this->set('success', $success);
			}
		}

	}

/**
 * Sets the update flag for a proposal so that its social media count gets updated with the next refresh
 * @param int $id the ID of the proposal to be updated
 */
	public function triggerUpdate($id = null) {

		$this->layout = false;

		if ( ! $this->Proposal->exists($id)) {
			return $this->render(false);
		}

		$this->Proposal->id = $id;
		$this->Proposal->saveField('update', true);

		$this->render(false);

	}

/**
 * Let users vote for a proposal by using SSO
 * @param  int $id the proposal to be voted for
 * @return void
 */
	public function vote($id) {

		// check if vote is eligible for voting
		$options = array('conditions' => array('Proposal.id' => $id, 'Proposal.selected' => true));
		$proposal = $this->Proposal->find('first', $options);

		if (empty($proposal)) {
			return $this->redirect(array('controller' => 'proposals', 'action' => 'proposals'));
		}

		$this->layout = 'default-vote';
		$this->set('proposal', $this->Proposal->findById($id));

		// check if a token has already been set
		$token = $this->Session->read('Vote.token');
		if (empty($token)) {
			$this->Session->write('Vote.token', $this->_createHash(16));
		}

		// create proposal ID and vote token
		$this->Session->write('Vote.proposal_id', $id);

		$this->render('vote-winner');

	}

/**
 * Screen to be shown when a vote error has occured
 * @return void
 */
	public function voteError() {

		$this->layout = 'default-vote';

	}

/**
 * Screen to to be shown when a vote already exists
 * @return void
 */
	public function voteExists() {

		$this->layout = 'default-vote';

	}

/**
 * Function to call when a vote has been submitted by a user via one of the SSO mechanisms
 * @return [type] [description]
 */
	public function voteComplete() {

		$this->loadModel('Vote');
		$this->layout = 'default-vote';

		// get ID of proposal and token
		$proposalId = $this->Session->read('Vote.proposal_id');
		$token 		= $this->Session->read('Vote.token');

		if ( empty($proposalId) || empty($token) || empty($this->data['auth']) ) {
			return $this->redirect(array('controller' => 'proposals', 'action' => 'voteError'));
		}

		$username = null;
		$email = null;

		// get email (facebook, linkedin, google+) or username (twitter) and see if it has been used before
		if (isset($this->data['auth']['info']['email'])) {
			$email = $this->data['auth']['info']['email'];
		} else {
			$username = $this->data['auth']['info']['nickname'];
		}

		// check if vote already exists
		$userExists = $this->Vote->userExists($username, $email, $token);

		if ( $userExists ) {
			return $this->redirect(array('controller' => 'proposals', 'action' => 'voteExists'));
		}

		$ip = null;
		if (isset($_SERVER['REMOTE_ADDR'])) { $ip = $_SERVER['REMOTE_ADDR']; }

		// set user email to blocked, so that no more votes can be done
		$vote = array(
			'token' 		=> $token,
			'username' 		=> $username,
			'email' 		=> $email,
			'proposal_id' 	=> $proposalId,
			'ip'			=> $ip
		);

		$this->Vote->save($vote);
		$this->set('proposal', $this->Proposal->findById($proposalId));

   	}

/**
 * Updates the social media count for each proposal that has been flagged as 'update'
 * @return void
 */
	private function _updateProposalsCount() {

		// check which proposals need to be updated
		$options = array('conditions' => array('Proposal.update' => true));
		$proposals = $this->Proposal->find('all', $options);

		// update proposal's facebook and twitter count
		foreach ($proposals as $proposal) {

			$this->Proposal->id = $proposal['Proposal']['id'];
			$this->Proposal->saveField('facebook_count', $this->Counter->facebookCount($proposal['Proposal']['id']));
			$this->Proposal->saveField('twitter_count', $this->Counter->twitterCount($proposal['Proposal']['id']));

			// set back to update false to not update it again
			$this->Proposal->saveField('update', false);

		}

	}

/**
  * sendNotificiationMail
  *
  * @param {Array} data the info that will be passed to the email template
  * @param {String} template the name of the template to be used
  * @param {String} subject the subject to be used in the mail
  */
	private function _sendNotificationEmail( $data, $template, $subject, $recipient = null ) {

		$Email = new CakeEmail();

		if ($recipient == null) {
			$recipient = array('marcel.kalveram@googlemail.com', 'jpont54@gmail.com', 'ispongre_1@hotmail.com');
		} else {
			$recipient = array( 0 => $recipient );
		}

		$Email->from( array('info@thebookproject.es' => 'The Book Project') );
		$Email->to( $recipient );
		$Email->replyTo( array('noreply@thebookproject.es' => 'The Book Project') );
		$Email->subject( $subject );
		$Email->template( $template );
		$Email->viewVars( $data );
		$Email->emailFormat( 'text' );
		$Email->send();

	}

/**
 * Creates a Spanish month string for a month integer
 * @param  int $month the month as integer
 * @return string the month as a Spanish string
 */
	private function _monthToString($month) {

		switch ($month) {
			case 1: return 'Enero'; break;
			case 2: return 'Febrero'; break;
			case 3: return 'Marzo'; break;
			case 4: return 'Abril'; break;
			case 5: return 'Mayo'; break;
			case 6: return 'Junio'; break;
			case 7: return 'Julio'; break;
			case 8: return 'Agosto'; break;
			case 9: return 'Septiembre'; break;
			case 10: return 'Octubre'; break;
			case 11: return 'Noviembre'; break;
			case 12: return 'Diciembre'; break;
		}

	}

/**
 * Generates an alphanumeric hash of the defined length
 * @param  int $length the length of the hash to be created
 * @return string the generated hash
 */
	private function _createHash($length) {

		$chars = "234567890abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$i = 0;
		$hash = "";
		while ($i <= $length) {
			$hash .= $chars{mt_rand(0,strlen($chars))};
			$i++;
		}
		return $hash;

	}

}