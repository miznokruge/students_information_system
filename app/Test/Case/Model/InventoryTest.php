<?php
App::uses('Inventory', 'Model');

/**
 * Inventory Test Case
 *
 */
class InventoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inventory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inventory = ClassRegistry::init('Inventory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inventory);

		parent::tearDown();
	}

}
