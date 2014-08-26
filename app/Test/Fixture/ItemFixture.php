<?php
/**
 * ItemFixture
 *
 */
class ItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'category' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'supplier_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'item_number' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cost_price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '15,2', 'unsigned' => false),
		'unit_price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '15,2', 'unsigned' => false),
		'quantity' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '15,2', 'unsigned' => false),
		'reorder_level' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '15,2', 'unsigned' => false),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'allow_alt_description' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'is_serialized' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'item_id', 'unique' => 1),
			'item_number' => array('column' => 'item_number', 'unique' => 1),
			'items_ibfk_1' => array('column' => 'supplier_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'supplier_id' => 1,
			'item_number' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'cost_price' => 1,
			'unit_price' => 1,
			'quantity' => 1,
			'reorder_level' => 1,
			'item_id' => 1,
			'allow_alt_description' => 1,
			'is_serialized' => 1,
			'deleted' => 1
		),
	);

}
