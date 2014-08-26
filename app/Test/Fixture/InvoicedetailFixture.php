<?php
/**
 * InvoicedetailFixture
 *
 */
class InvoicedetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'invoice_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'qty' => array('type' => 'decimal', 'null' => true, 'default' => '0.0000', 'length' => '30,4', 'unsigned' => false),
		'unitofmeasureid' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'price' => array('type' => 'decimal', 'null' => true, 'default' => '0.0000', 'length' => '30,4', 'unsigned' => false),
		'currency_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'rate' => array('type' => 'decimal', 'null' => true, 'default' => '0.0000', 'length' => '30,4', 'unsigned' => false),
		'itemname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_invoicedet_invoice' => array('column' => 'invoice_id', 'unique' => 0),
			'FK_invoicedet_uom' => array('column' => 'unitofmeasureid', 'unique' => 0),
			'FK_invoicedet_curr' => array('column' => 'currency_id', 'unique' => 0)
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
			'invoice_id' => 1,
			'qty' => '',
			'unitofmeasureid' => 1,
			'price' => '',
			'currency_id' => 1,
			'rate' => '',
			'itemname' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
