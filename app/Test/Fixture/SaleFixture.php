<?php
/**
 * SaleFixture
 *
 */
class SaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'salesorder_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => true),
		'no_transaksi' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tgl_transaksi' => array('type' => 'date', 'null' => false, 'default' => '0000-00-00'),
		'type_transaksi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'customer_id' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'keterangan' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'posted' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'entry_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'est_delivery_date' => array('type' => 'date', 'null' => true, 'default' => '0000-00-00'),
		'entry_by' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'closed' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'closed_by' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'closed_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'jatuh_tempo' => array('type' => 'date', 'null' => true, 'default' => null),
		'salesman' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ispaid' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'paid_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'paid_via' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'paid_remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comission_paid' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comission_paiddate' => array('type' => 'date', 'null' => true, 'default' => null),
		'discount' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => false),
		'comission_amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => false),
		'invoiced' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoiced_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'invoiced_by' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tanda_terima' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tanda_terima_tgl' => array('type' => 'date', 'null' => true, 'default' => null),
		'bb' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'no_kendaraan' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'createdby' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'createddate' => array('type' => 'datetime', 'null' => true, 'default' => '0000-00-00 00:00:00'),
		'updatedby' => array('type' => 'string', 'null' => true, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'updateddate' => array('type' => 'datetime', 'null' => true, 'default' => '0000-00-00 00:00:00'),
		'lunas' => array('type' => 'string', 'null' => true, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lunas_by' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lunas_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'tanda_terima_by' => array('type' => 'string', 'null' => true, 'default' => 'N', 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'total' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '10,2', 'unsigned' => false),
		'total_kirim_unit' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'is_tax' => array('type' => 'string', 'null' => false, 'default' => 'N', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'no_transaksi' => 'Lorem ipsum dolor sit amet',
			'tgl_transaksi' => '2014-06-17',
			'type_transaksi' => 'Lorem ipsum dolor ',
			'customer_id' => 'Lorem ipsum dolor sit amet',
			'keterangan' => 'Lorem ipsum dolor sit amet',
			'posted' => 'Lorem ipsum dolor sit ame',
			'entry_date' => '2014-06-17 16:50:06',
			'est_delivery_date' => '2014-06-17',
			'entry_by' => 'Lorem ipsum dolor sit amet',
			'closed' => 'Lorem ipsum dolor sit ame',
			'closed_by' => 'Lorem ipsum dolor sit amet',
			'closed_date' => '2014-06-17 16:50:06',
			'jatuh_tempo' => '2014-06-17',
			'salesman' => 'Lorem ipsum dolor sit amet',
			'parent_id' => 1,
			'ispaid' => 'Lorem ipsum dolor sit ame',
			'paid_date' => '2014-06-17',
			'paid_via' => 'Lorem ipsum dolor sit amet',
			'paid_remarks' => 'Lorem ipsum dolor sit amet',
			'comission_paid' => 'Lorem ipsum dolor sit ame',
			'comission_paiddate' => '2014-06-17',
			'discount' => 1,
			'comission_amount' => 1,
			'invoiced' => 'Lorem ipsum dolor sit ame',
			'invoiced_date' => '2014-06-17',
			'invoiced_by' => 'Lorem ipsum dolor sit amet',
			'tanda_terima' => 'Lorem ipsum dolor sit ame',
			'tanda_terima_tgl' => '2014-06-17',
			'bb' => 'Lorem ipsum dolor sit amet',
			'no_kendaraan' => 'Lorem ipsum dolor sit amet',
			'createdby' => 'Lorem ipsum dolor sit amet',
			'createddate' => '2014-06-17 16:50:06',
			'updatedby' => 'Lorem ipsum dolor sit amet',
			'updateddate' => '2014-06-17 16:50:06',
			'lunas' => 'Lorem ipsum dolor sit ame',
			'lunas_by' => 'Lorem ipsum dolor sit amet',
			'lunas_date' => '2014-06-17 16:50:06',
			'tanda_terima_by' => 'Lorem ipsum dolor sit amet',
			'total' => 1,
			'total_kirim_unit' => 1,
			'state_id' => 1,
			'is_tax' => 'Lorem ipsum dolor sit ame',
			'deleted' => 1
		),
	);

}
