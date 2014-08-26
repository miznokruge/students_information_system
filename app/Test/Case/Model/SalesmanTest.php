<?php
App::uses('Salesman', 'Model');

/**
 * Salesman Test Case
 *
 */
class SalesmanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salesman',
		'app.customer',
		'app.sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Salesman = ClassRegistry::init('Salesman');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Salesman);

		parent::tearDown();
	}

}
