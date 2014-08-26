<?php
App::uses('Task', 'Model');

/**
 * Task Test Case
 *
 */
class TaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.task',
		'app.user',
		'app.membership',
		'app.set',
		'app.category',
		'app.question_order',
		'app.comment',
		'app.question',
		'app.rating',
		'app.statistic',
		'app.group',
		'app.permission',
		'app.groups_permission',
		'app.groups_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Task = ClassRegistry::init('Task');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Task);

		parent::tearDown();
	}

}
