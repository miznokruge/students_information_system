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
		'app.student'
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
