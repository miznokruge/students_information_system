<?php
App::uses('Item', 'Model');

/**
 * Item Test Case
 *
 */
class ItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item',
		'app.supplier',
		'app.product',
		'app.unit',
		'app.salesorderdetail',
		'app.salesorder',
		'app.customer',
		'app.salesman',
		'app.customer_bank',
		'app.bank',
		'app.currency',
		'app.country',
		'app.currencyrate',
		'app.invoicedetail',
		'app.invoice',
		'app.invoicetype',
		'app.tax',
		'app.items_tax',
		'app.sales_item',
		'app.sales_items_tax',
		'app.sale',
		'app.state',
		'app.salesorder_state',
		'app.salesordercomment',
		'app.receiving',
		'app.employee',
		'app.person',
		'app.receivings_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Item = ClassRegistry::init('Item');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Item);

		parent::tearDown();
	}

}
