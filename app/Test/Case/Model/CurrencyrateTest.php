<?php
App::uses('Currencyrate', 'Model');

/**
 * Currencyrate Test Case
 *
 */
class CurrencyrateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.currencyrate',
		'app.currency',
		'app.country',
		'app.bank',
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
		$this->Currencyrate = ClassRegistry::init('Currencyrate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Currencyrate);

		parent::tearDown();
	}

}
