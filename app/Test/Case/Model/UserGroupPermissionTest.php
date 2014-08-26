<?php
App::uses('UserGroupPermission', 'Model');

/**
 * UserGroupPermission Test Case
 *
 */
class UserGroupPermissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_group_permission',
		'app.user_group',
		'app.user',
		'app.membership'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserGroupPermission = ClassRegistry::init('UserGroupPermission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserGroupPermission);

		parent::tearDown();
	}

}
