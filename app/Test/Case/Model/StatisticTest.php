<?php
App::uses('Statistic', 'Model');

/**
 * Statistic Test Case
 *
 */
class StatisticTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.statistic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Statistic = ClassRegistry::init('Statistic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Statistic);

		parent::tearDown();
	}

}
