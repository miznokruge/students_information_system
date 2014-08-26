<?php
App::uses('Sale', 'Model');

/**
 * Sale Test Case
 *
 */
class SaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sale',
		'app.salesorder',
		'app.customer',
		'app.state',
		'app.item',
		'app.sales_item',
		'app.items_tax',
		'app.sales_items_tax'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sale = ClassRegistry::init('Sale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sale);

		parent::tearDown();
	}

}
