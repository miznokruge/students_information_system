<?php
App::uses('Detention', 'Model');

/**
 * Detention Test Case
 *
 */
class DetentionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detention',
		'app.student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Detention = ClassRegistry::init('Detention');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detention);

		parent::tearDown();
	}

}
