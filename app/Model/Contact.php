<?php
App::uses('AppModel', 'Model');
/**
 * Proposal Model
 *
 */
class Contact extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'email';

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
	);

}
