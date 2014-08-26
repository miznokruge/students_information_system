<?php
App::uses('Currency', 'Model');

/**
 * Currency Test Case
 *
 */
class CurrencyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.currency',
		'app.country',
		'app.bank',
		'app.currencyrate',
		'app.invoicedetail',
		'app.invoice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Currency = ClassRegistry::init('Currency');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Currency);

		parent::tearDown();
	}

}
