<?php
App::uses('Vote', 'Model');

/**
 * Vote Test Case
 *
 */
class VoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vote'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vote = ClassRegistry::init('Vote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vote);

		parent::tearDown();
	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsEmail() {

		$exists = $this->Vote->userExists(null, 'marcel.kalveram@googlemail.com', null);
		$this->assertEqual($exists, true);

	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsEmailNot() {

		$exists = $this->Vote->userExists(null, 'marcel.kalveram@gmail.com', null);
		$this->assertEqual($exists, false);

	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsUsername() {

		$exists = $this->Vote->userExists('marcelkalveram', null, null);
		$this->assertEqual($exists, true);

	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsUsernameNot() {

		$exists = $this->Vote->userExists('marcel', null, null);
		$this->assertEqual($exists, false);

	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsToken() {

		$exists = $this->Vote->userExists(null, null, '12345678');
		$this->assertEqual($exists, true);

	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsTokenNot() {

		$exists = $this->Vote->userExists(null, null, '87654321');
		$this->assertEqual($exists, false);

	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsTokenUsername() {

		$exists = $this->Vote->userExists('marcelkalveram', null, '87654321');
		$this->assertEqual($exists, true);

	}

/**
 * testUserExists method
 *
 * @return void
 */
	public function testUserExistsTokenUsernameAlt() {

		$exists = $this->Vote->userExists('mka', null, '12345678');
		$this->assertEqual($exists, true);

	}

}
