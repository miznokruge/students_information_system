<?php
App::uses('Acievement', 'Model');

/**
 * Acievement Test Case
 *
 */
class AcievementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acievement',
		'app.student',
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
		$this->Acievement = ClassRegistry::init('Acievement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acievement);

		parent::tearDown();
	}

}
