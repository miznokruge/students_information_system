<?php
App::uses('Student', 'Model');

/**
 * Student Test Case
 *
 */
class StudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student',
		'app.acievement',
		'app.behavior',
		'app.detention',
		'app.student_address',
		'app.address',
		'app.student_event',
		'app.event_type',
		'app.student_loan',
		'app.transcript'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Student = ClassRegistry::init('Student');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Student);

		parent::tearDown();
	}

}
