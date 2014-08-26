<?php

App::import('Vendor', 'xtcpdf');
set_time_limit(300000);
$pdf = new XTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
//---------------------------------------------------------- config start ---------------------------------------------------------------------------
$pdf->namaorg = $config[1]['nama'];
$pdf->telp = $config[3]['nama'];
$pdf->fax = $config[4]['nama'];
$pdf->nama_aplikasi = $config[0]['nama'];
$pdf->alamat = $config[2]['nama'];
$pdf->email = $config[5]['nama'];
$pdf->website = $config[7]['nama'];
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mizno Kruge');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
//$pdf->SetHeaderData($logo,20, '','');
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

$pdf->setPrintFooter(false);
$pdf->setPrintHeader(false);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

#$pdf->SetDisplayMode($zoom='fullpage', $layout='TwoColumnRight', $mode='UseNone');
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 28, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 8);
//---------------------------------------------------------- config end ---------------------------------------------------------------------------
$style = array(
    'position' => '',
    'align' => 'C',
    'stretch' => false,
    'fitwidth' => true,
    'cellfitalign' => '',
    'border' => true,
    'hpadding' => 'auto',
    'vpadding' => 'auto',
    'fgcolor' => array(0, 0, 0),
    'bgcolor' => false, //array(255,255,255),
    'text' => true,
    'font' => 'helvetica',
    'fontsize' => 8,
    'stretchtext' => 6
);
$html = '';
$html.="No Anggota : " . $user['User']['username'] . '<br>';
$html.="Nama : " . $user['User']['nama'] . '<br>';
$html.="Email : " . $user['User']['email'] . '<br>';
$params1 = $pdf->serializeTCPDFtagParameters(array($user['User']['username'], 'C39', '', 45, 60, 18, 0.4, $style, 'N'));
$html.= '<tcpdf method="write1DBarcode" params="' . $params1 . '"/>';
$params2 = $pdf->serializeTCPDFtagParameters(array($user['User']['username'], 'C128', '', 65, 60, 18, 0.4, $style, 'N'));
$html.= '<tcpdf method="write1DBarcode" params="' . $params2 . '"/>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
echo $pdf->Output('Cetak Barcode Anggota.pdf', 'D');