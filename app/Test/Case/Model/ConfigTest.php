<?php
App::uses('Config', 'Model');

/**
 * Config Test Case
 *
 */
class ConfigTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.config'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Config = ClassRegistry::init('Config');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Config);

		parent::tearDown();
	}

}
