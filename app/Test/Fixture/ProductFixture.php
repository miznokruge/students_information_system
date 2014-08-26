<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'NAMA_BRG' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'REORDER' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => false),
		'HARGA_BELI' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'HARGA_JUAL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'STOK' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DISKON_PERSEN' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DATE_AKHIR_DISKON' => array('type' => 'date', 'null' => true, 'default' => null),
		'KETERANGAN' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'KODE_SATUAN' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LAST_EDIT_DATE' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'LAST_EDIT_BY' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PERSEN_MARGIN' => array('type' => 'integer', 'null' => false, 'default' => '30', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'NAMA_BRG' => array('column' => 'KODE_SATUAN', 'unique' => 0)
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
			'NAMA_BRG' => 'Lorem ipsum dolor sit amet',
			'REORDER' => 1,
			'HARGA_BELI' => 'Lorem ipsum dolor sit amet',
			'HARGA_JUAL' => 'Lorem ipsum dolor sit amet',
			'STOK' => 'Lorem ipsum dolor sit amet',
			'DISKON_PERSEN' => 'Lorem ipsum dolor sit amet',
			'DATE_AKHIR_DISKON' => '2014-06-16',
			'KETERANGAN' => 'Lorem ipsum dolor sit amet',
			'KODE_SATUAN' => 1,
			'LAST_EDIT_DATE' => '2014-06-16 18:38:40',
			'LAST_EDIT_BY' => 'Lorem ipsum dolor sit amet',
			'PERSEN_MARGIN' => 1
		),
	);

}
