<?php
App::uses('CustomerBank', 'Model');

/**
 * CustomerBank Test Case
 *
 */
class CustomerBankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_bank',
		'app.bank',
		'app.currency',
		'app.country',
		'app.currencyrate',
		'app.invoicedetail',
		'app.invoice',
		'app.customer',
		'app.salesman',
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
		$this->CustomerBank = ClassRegistry::init('CustomerBank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerBank);

		parent::tearDown();
	}

}
