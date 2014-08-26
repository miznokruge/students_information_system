<?php
App::uses('Warehouse', 'Model');

/**
 * Warehouse Test Case
 *
 */
class WarehouseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.warehouse'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Warehouse = ClassRegistry::init('Warehouse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Warehouse);

		parent::tearDown();
	}

}
