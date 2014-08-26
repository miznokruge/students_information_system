<?php
App::import('Vendor', 'xtcpdf');
set_time_limit(300000);
$pdf = new XTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
//---------------------------------------------------------- config start ---------------------------------------------------------------------------
$pdf->namaorg=$config[1]['nama'];
$pdf->telp=$config[3]['nama'];
$pdf->fax=$config[4]['nama'];
$pdf->nama_aplikasi=$config[0]['nama'];
$pdf->alamat=$config[2]['nama'];
$pdf->email=$config[5]['nama'];
$pdf->website=$config[7]['nama'];
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mizno Kruge');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
//$pdf->SetHeaderData($logo,20, '','');
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

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
$html = '<style>
    h1{text-align:center}
    table{border-collapse:collapse;}
    table,th, td{border: 1px solid black;}
   </style>
   <h1>Laporan</h1>';
$html.= '<table border="0" cellpadding="5" cellspacing="0" width="100%">';
$html.= '<tr>';
    $html.= '<td width="50">ID</td>';
    $html.= '<td width="100">Kode</td>';
    $html.= '<td>Keterangan</td>';
$html.= '</tr>';
foreach ($bahasas as $bahasa) {
$html.= '<tr>';
    $html.= '<td>' . $bahasa['Bahasa']['id'] . '</td>';
    $html.= '<td>' . $bahasa['Bahasa']['kode'] . '</td>';
    $html.= '<td>' . $bahasa['Bahasa']['keterangan'] . '</td>';
$html.= '</tr>';
}
$html.= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output('bahasa.pdf', 'D');