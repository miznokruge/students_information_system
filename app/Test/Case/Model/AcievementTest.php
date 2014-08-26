<?php
App::uses('Acievement', 'Model');

/**
 * Acievement Test Case
 *
 */
class AcievementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acievement',
		'app.student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Acievement = ClassRegistry::init('Acievement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acievement);

		parent::tearDown();
	}

}
