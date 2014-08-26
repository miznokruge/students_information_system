<?php
App::uses('Salesorder', 'Model');

/**
 * Salesorder Test Case
 *
 */
class SalesorderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salesorder',
		'app.customer',
		'app.sale',
		'app.state',
		'app.item',
		'app.sales_item',
		'app.items_tax',
		'app.sales_items_tax',
		'app.invoice',
		'app.salesordercomment',
		'app.salesorderdetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Salesorder = ClassRegistry::init('Salesorder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Salesorder);

		parent::tearDown();
	}

}
