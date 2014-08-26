<?php
App::uses('State', 'Model');

/**
 * State Test Case
 *
 */
class StateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state',
		'app.sale',
		'app.salesorder',
		'app.customer',
		'app.salesman',
		'app.customer_bank',
		'app.bank',
		'app.invoice',
		'app.salesordercomment',
		'app.salesorderdetail',
		'app.item',
		'app.sales_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->State = ClassRegistry::init('State');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->State);

		parent::tearDown();
	}

}
