<?php
App::uses('Invoice', 'Model');

/**
 * Invoice Test Case
 *
 */
class InvoiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoice',
		'app.salesorder',
		'app.customer',
		'app.salesman',
		'app.customer_bank',
		'app.bank',
		'app.currency',
		'app.country',
		'app.currencyrate',
		'app.invoicedetail',
		'app.sale',
		'app.state',
		'app.item',
		'app.sales_item',
		'app.salesorder_state',
		'app.salesordercomment',
		'app.salesorderdetail',
		'app.product',
		'app.supplier',
		'app.receiving',
		'app.employee',
		'app.person',
		'app.receivings_item',
		'app.unit',
		'app.invoicetype',
		'app.tax',
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
		$this->Invoice = ClassRegistry::init('Invoice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Invoice);

		parent::tearDown();
	}

}
