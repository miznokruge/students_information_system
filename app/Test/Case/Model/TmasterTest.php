<?php
App::uses('Tmaster', 'Model');

/**
 * Tmaster Test Case
 *
 */
class TmasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tmaster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tmaster = ClassRegistry::init('Tmaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tmaster);

		parent::tearDown();
	}

}
