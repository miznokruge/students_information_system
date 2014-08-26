<?php
App::uses('StudentAddress', 'Model');

/**
 * StudentAddress Test Case
 *
 */
class StudentAddressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student_address',
		'app.student',
		'app.address'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentAddress = ClassRegistry::init('StudentAddress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentAddress);

		parent::tearDown();
	}

}
