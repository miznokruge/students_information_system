<?php
App::uses('SalesorderState', 'Model');

/**
 * SalesorderState Test Case
 *
 */
class SalesorderStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salesorder_state'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalesorderState = ClassRegistry::init('SalesorderState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalesorderState);

		parent::tearDown();
	}

}
