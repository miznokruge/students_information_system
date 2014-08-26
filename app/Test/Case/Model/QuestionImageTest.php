<?php
App::uses('QuestionImage', 'Model');

/**
 * QuestionImage Test Case
 *
 */
class QuestionImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_image',
		'app.question',
		'app.set',
		'app.category',
		'app.question_order',
		'app.comment',
		'app.user',
		'app.rating'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionImage = ClassRegistry::init('QuestionImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionImage);

		parent::tearDown();
	}

}
