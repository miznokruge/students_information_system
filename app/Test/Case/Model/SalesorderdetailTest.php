<?php
App::uses('Salesorderdetail', 'Model');

/**
 * Salesorderdetail Test Case
 *
 */
class SalesorderdetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.sale',
		'app.state',
		'app.item',
		'app.sales_item',
		'app.salesordercomment',
		'app.product',
		'app.supplier',
		'app.receiving',
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
		$this->Salesorderdetail = ClassRegistry::init('Salesorderdetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Salesorderdetail);

		parent::tearDown();
	}

}
