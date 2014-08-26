<?php
/**
 * SalesorderdetailFixture
 *
 */
class SalesorderdetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'salesorder_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => true),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'deleted' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false),
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
			'salesorder_id' => 1,
			'product_id' => 1,
			'price' => 1,
			'amount' => 1,
			'deleted' => 1
		),
	);

}
