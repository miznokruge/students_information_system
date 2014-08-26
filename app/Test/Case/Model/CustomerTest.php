<?php
App::uses('Customer', 'Model');

/**
 * Customer Test Case
 *
 */
class CustomerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer',
		'app.salesman',
		'app.customer_bank',
		'app.bank',
		'app.currency',
		'app.country',
		'app.currencyrate',
		'app.invoicedetail',
		'app.invoice',
		'app.sale',
		'app.salesorder',
		'app.salesorder_state',
		'app.salesordercomment',
		'app.salesorderdetail',
		'app.product',
		'app.supplier',
		'app.item',
		'app.receiving',
		'app.employee',
		'app.receivings_item',
		'app.unit',
		'app.state',
		'app.sales_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Customer = ClassRegistry::init('Customer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Customer);

		parent::tearDown();
	}

}
