<?php
App::uses('Receiving', 'Model');

/**
 * Receiving Test Case
 *
 */
class ReceivingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.receiving',
		'app.supplier',
		'app.item',
		'app.product',
		'app.employee',
		'app.receivings_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Receiving = ClassRegistry::init('Receiving');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Receiving);

		parent::tearDown();
	}

}
