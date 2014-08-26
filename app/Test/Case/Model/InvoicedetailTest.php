<?php
App::uses('Invoicedetail', 'Model');

/**
 * Invoicedetail Test Case
 *
 */
class InvoicedetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoicedetail',
		'app.invoice',
		'app.currency',
		'app.country',
		'app.bank',
		'app.currencyrate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Invoicedetail = ClassRegistry::init('Invoicedetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Invoicedetail);

		parent::tearDown();
	}

}
