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
		'app.student_event'
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
