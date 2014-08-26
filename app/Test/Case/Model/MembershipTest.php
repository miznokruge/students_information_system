<?php
App::uses('Membership', 'Model');

/**
 * Membership Test Case
 *
 */
class MembershipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.membership',
		'app.user',
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
		$this->Membership = ClassRegistry::init('Membership');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Membership);

		parent::tearDown();
	}

}
