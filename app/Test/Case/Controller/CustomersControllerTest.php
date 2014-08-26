<?php
App::uses('CustomersController', 'Controller');

/**
 * CustomersController Test Case
 *
 */
class CustomersControllerTest extends ControllerTestCase {

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
		'app.state',
		'app.salesordercomment',
		'app.salesorderdetail',
		'app.item',
		'app.sales_item'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
