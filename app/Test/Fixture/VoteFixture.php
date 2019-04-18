<?php
/**
 * VoteFixture
 *
 */
class VoteFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Vote');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'email' => 'marcel.kalveram@googlemail.com',
			'username' => null,
			'proposal_id' => 1,
			'token' => null,
			'created' => '2014-01-11 16:57:11',
			'modified' => '2014-01-11 16:57:11'
		),
		array(
			'id' => 2,
			'email' => null,
			'username' => 'marcelkalveram',
			'proposal_id' => 2,
			'token' => null,
			'created' => '2014-01-11 16:57:11',
			'modified' => '2014-01-11 16:57:11'
		),
		array(
			'id' => 3,
			'email' => null,
			'username' => null,
			'proposal_id' => 3,
			'token' => '12345678',
			'created' => '2014-01-11 16:57:11',
			'modified' => '2014-01-11 16:57:11'
		),
	);

}
