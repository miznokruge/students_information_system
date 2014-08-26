<?php
App::uses('Tax', 'Model');

/**
 * Tax Test Case
 *
 */
class TaxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tax',
		'app.invoice',
		'app.item',
		'app.items_tax',
		'app.sales_item',
		'app.sales_items_tax'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tax = ClassRegistry::init('Tax');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tax);

		parent::tearDown();
	}

}
