<?php
App::uses('Transcript', 'Model');

/**
 * Transcript Test Case
 *
 */
class TranscriptTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transcript',
		'app.student',
		'app.acievement',
		'app.behavior',
		'app.detention',
		'app.student_address',
		'app.address',
		'app.student_event',
		'app.event_type',
		'app.student_loan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transcript = ClassRegistry::init('Transcript');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transcript);

		parent::tearDown();
	}

}
