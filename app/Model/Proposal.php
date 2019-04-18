<?php
App::uses('AppModel', 'Model');
/**
 * Proposal Model
 *
 */
class Proposal extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'email';

	var $hasMany = array(
		'Vote' => array(
			'className' => 'Vote',
			'foreignKey' => 'proposal_id'
		)
	);

	var $validate = array(
		'text' 	   => array(
			'rule' 	  => 'notEmpty',
			'message' => 'Esta caja no debe estar vacía'
		),
		'forename' => array(
			'rule' 	  => 'notEmpty',
			'message' => 'Esta caja no debe estar vacía'
		),
		'lastname' => array(
			'rule' 	  => 'notEmpty',
			'message' => 'Esta caja no debe estar vacía'
		),
		'email'	   => array(
			'rule' 	  => 'email',
			'message' => 'Esta caja no debe estar vacía'
		),
		'conditions' => array(
			'rule' 	  => array('equalTo', "1"),
			'message' => 'Tienes que aceptar las condiciones para enviar tu propuesta'
		)
	);

/**
 * afterFind: Find the corresponding vote count and add it to the array
 * @param  array $results results of the seach query
 * @param  boolean $primary
 * @return array the modified search query
 */
	public function afterFind($results, $primary = false) {

	    foreach ($results as $key => $val) {

	    	if (isset($val['Proposal']['id'])) {
	    		$options = array('conditions' => array('Vote.proposal_id' => $val['Proposal']['id']));
	    		$votes = $this->Vote->find('count', $options);
	    		$results[$key]['Proposal']['votes'] = $votes;
	    	}

	    }
	    return $results;

	}

}
