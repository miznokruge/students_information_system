<?php
App::uses('StudentEvent', 'Model');

/**
 * StudentEvent Test Case
 *
 */
class StudentEventTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student_event',
		'app.student',
		'app.event_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentEvent = ClassRegistry::init('StudentEvent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentEvent);

		parent::tearDown();
	}

}
