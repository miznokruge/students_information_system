<?php
/**
 * ClassFixture
 *
 */
class ClassFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'teachers_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'students_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'details' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'teachers_id' => 1,
			'students_id' => 1,
			'details' => 'Lorem ipsum dolor sit amet'
		),
	);

}
