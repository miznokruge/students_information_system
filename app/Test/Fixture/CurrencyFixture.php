<?php
/**
 * CurrencyFixture
 *
 */
class CurrencyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 70, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'symbol' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'recordstatus' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'i18n' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'deleted' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'uq_currency_countrycurname' => array('column' => array('country_id', 'name'), 'unique' => 1),
			'fk_currency_country' => array('column' => 'country_id', 'unique' => 0)
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
			'country_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'symbol' => 'L',
			'recordstatus' => 1,
			'i18n' => 'Lorem ip',
			'deleted' => 1
		),
	);

}
