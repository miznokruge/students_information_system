<?php
App::uses('Behavior', 'Model');

/**
 * Behavior Test Case
 *
 */
class BehaviorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.behavior',
		'app.student',
		'app.acievement',
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
		$this->Behavior = ClassRegistry::init('Behavior');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Behavior);

		parent::tearDown();
	}

}
