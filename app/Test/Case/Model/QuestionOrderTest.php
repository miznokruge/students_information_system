<?php
App::uses('QuestionOrder', 'Model');

/**
 * QuestionOrder Test Case
 *
 */
class QuestionOrderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_order',
		'app.set',
		'app.category',
		'app.comment',
		'app.user',
		'app.rating',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionOrder = ClassRegistry::init('QuestionOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionOrder);

		parent::tearDown();
	}

}
