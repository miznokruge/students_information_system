<?php
App::uses('Detention', 'Model');

/**
 * Detention Test Case
 *
 */
class DetentionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detention',
		'app.student',
		'app.acievement',
		'app.behavior',
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
		$this->Detention = ClassRegistry::init('Detention');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detention);

		parent::tearDown();
	}

}
