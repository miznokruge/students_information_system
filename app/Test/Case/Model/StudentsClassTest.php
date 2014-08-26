<?php
App::uses('StudentsClass', 'Model');

/**
 * StudentsClass Test Case
 *
 */
class StudentsClassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.students_class',
		'app.teachers',
		'app.students'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentsClass = ClassRegistry::init('StudentsClass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentsClass);

		parent::tearDown();
	}

}
