<?php
App::uses('EventType', 'Model');

/**
 * EventType Test Case
 *
 */
class EventTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event_type',
		'app.student_event',
		'app.student',
		'app.acievement',
		'app.behavior',
		'app.detention',
		'app.student_address',
		'app.address',
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
		$this->EventType = ClassRegistry::init('EventType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventType);

		parent::tearDown();
	}

}
