<?php
App::uses('AppModel', 'Model');
/**
 * Proposal Model
 *
 */
class Vote extends AppModel {

	var $belongsTo = array(
		'Proposal' => array(
			'className' => 'Proposal',
			'foreignKey' => 'proposal_id'
		)
	);

/**
 * Find out if a user has voted before
 * @param  string $username the unique username of a user
 * @param  srring $email the unique email of a user
 * @param  string $token the unique token of a user
 * @return Boolean true is user exists, false if user doesn't exist
 */
	public function userExists($username = null, $email = null, $token = null) {

		$conditions = array();

		if ( $token != null ) {
			$conditions['Vote.token'] = $token;
		}

		if ( $email != null ) {
			$conditions['Vote.email'] = $email;
		}

		if ( $username != null ) {
			$conditions['Vote.username'] = $username;
		}

		$exists = $this->find('first', array(
			'conditions' => array(
				'OR' => $conditions
			)
		));

		return ! empty($exists);

	}

}
