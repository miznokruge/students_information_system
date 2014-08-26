<?php
/**
 * WarehouseFixture
 *
 */
class WarehouseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'wh_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'wh_desc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'deleteby' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'deletedate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'createdby' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'createddate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updatedby' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'updateddate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'wh_name' => 'Lorem ipsum dolor sit amet',
			'wh_desc' => 'Lorem ipsum dolor sit amet',
			'deleteby' => 'Lorem ipsum dolor sit amet',
			'deletedate' => '2014-06-17 16:48:50',
			'createdby' => 'Lorem ipsum dolor sit amet',
			'createddate' => '2014-06-17 16:48:50',
			'updatedby' => 'Lorem ipsum dolor sit amet',
			'updateddate' => '2014-06-17 16:48:50'
		),
	);

}
