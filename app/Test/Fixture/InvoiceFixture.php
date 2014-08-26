<?php
/**
 * InvoiceFixture
 *
 */
class InvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'invoiceno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'salesorder_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'addressbookid' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'amount' => array('type' => 'decimal', 'null' => true, 'default' => '0.0000', 'length' => '30,4', 'unsigned' => false),
		'currency_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'rate' => array('type' => 'decimal', 'null' => true, 'default' => '1.0000', 'length' => '30,4', 'unsigned' => false),
		'invoicetype_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'invoicedate' => array('type' => 'date', 'null' => true, 'default' => null),
		'headernote' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tax_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'paymentmethodid' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'recordstatus' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_invoice_ab' => array('column' => 'addressbookid', 'unique' => 0),
			'FK_invoice_curr' => array('column' => 'currency_id', 'unique' => 0),
			'FK_invoice_tax' => array('column' => 'tax_id', 'unique' => 0),
			'FK_invoice_pay' => array('column' => 'paymentmethodid', 'unique' => 0)
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
			'invoiceno' => 'Lorem ipsum dolor sit amet',
			'pono' => 'Lorem ipsum dolor sit amet',
			'salesorder_id' => 1,
			'addressbookid' => 1,
			'amount' => '',
			'currency_id' => 1,
			'rate' => '',
			'invoicetype_id' => 1,
			'invoicedate' => '2014-07-05',
			'headernote' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tax_id' => 1,
			'paymentmethodid' => 1,
			'recordstatus' => 1
		),
	);

}
