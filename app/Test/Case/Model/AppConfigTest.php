<?php
App::uses('AppConfig', 'Model');

/**
 * AppConfig Test Case
 *
 */
class AppConfigTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.app_config'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AppConfig = ClassRegistry::init('AppConfig');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AppConfig);

		parent::tearDown();
	}

}
