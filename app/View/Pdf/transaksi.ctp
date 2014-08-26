<?php

App::import('Vendor', 'xtcpdf_struk');
set_time_limit(3000);
$pdf = new XTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
// create new PDF document untuk cetak custom print
$pdf = new XTCPDF('P', 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);
// add a page
$nama_laporan = 'Sales Receipt';
$kasir='Rina Riswati';
//---------------------------------------------------------- config start ---------------------------------------------------------------------------
$pdf->namaorg = $AppConfig['company'];
$pdf->telp = $AppConfig['phone'];
$pdf->fax = $AppConfig['fax'];
$pdf->nama_aplikasi = $AppConfig['AppName'];
$pdf->alamat = $AppConfig['address'];
$pdf->email = $AppConfig['email'];
$pdf->website = $AppConfig['website'];
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mizno Kruge');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(1,15,1);
#$pdf->setPrintFooter(false);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(0);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
#$pdf->AddPage();
$pdf->SetFont('helvetica', '', 6);
//---------------------------------------------------------- config end ---------------------------------------------------------------------------
$html = '';
$html.='<table cellpadding="5" cellspacing="0" border="0" width="100%">';
$html.='<tr>';
$html.='<td colspan="3" align="center" style="margin-top:3px; margin-bottom:5px;"><h3><u>' . $nama_laporan . '</u></h3></td>';
$html.='</tr>';
$html.='<tr>';
$html.='<td colspan="3">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td width="100" align="center">No</td>
				<td> : '.time().'</td>
			</tr>
			<tr>
				<td align="center">Kasir</td>
				<td> : ' . $kasir . '</td>
            </tr>
            <tr>
				<td align="center">Tanggal</td>
				<td> : ' . date("d-m-Y H:i:s") . '</td>
            </tr>
</table>
</td>';
$html.='</tr>';
$html.='</table>';
$html.='<hr>';
$html.='<table border="0" cellpadding="5" cellspacing="0" width="100%">
              <thead>
            	<tr>
                	<th><strong>Produk</strong></th>
                	<th align="center"><strong>Harga</strong></th>
                	<th align="center"><strong>Qty</strong></th>
                    <th align="center"><strong>Subtotal</strong></th>
                </tr>
                </thead>';
$total = 0;
$tk = 0;
$i = 0;
$panjang = 50;
foreach ($salesorder['Salesorderdetail'] as $sod) {
    $html.='<tr>
            	  <td style="border-bottom:dashed 1px #000;">' . $sod['Product']['id'] . ' ' . $sod['Product']['NAMA_BRG'] . ' </td>
            	  <td style="border-bottom:dashed 1px #000;" align="center">' . number_format($sod['price']) . '</td>
            	  <td style="border-bottom:dashed 1px #000;" align="center">' . number_format($sod['amount']) . '</td>
                  <td style="border-bottom:dashed 1px #000;" align="center">' . number_format($sod['amount']*$sod['price']) . '</td>
          	    </tr>';
    $panjang+=10;
    $total+=$sod['amount']*$sod['price'];
}
$bayar=100000;
$html.='<tr>
    <td align="right"><strong>Total</strong></td>
    <td></td>
    <td></td>
    <td><strong>' . number_format($total) . '</strong></td>
</tr>';
$html.='<tr>
    <td align="right"><strong>Bayar</strong></td>
    <td></td>
    <td></td>
    <td><strong>' . number_format($bayar) . '</strong></td>
</tr>';
$html.='<tr>
    <td align="right"><strong>Kembali</strong></td>
    <td></td>
    <td></td>
    <td><strong>' . number_format($bayar-$total) . '</strong></td>
</tr>';
$html.='</table>';
//$html.='<p style="text-align:center">------ Terimakasih ------</p>';
//$html.='<br><br><table border=".5" cellpadding="4" cellspacing="1">
//    <tr>
//        <td>Created By</td>
//        <td>Approved By</td>
//        <td>Receiver</td>
//    </tr>
//</table>';
#$pdf->Ln(2);
$panjang+=25;
$resolution = array(75, $panjang);
$pdf->AddPage('P', $resolution);
$pdf->writeHTML($html, true, false, true, false, '');
//$pdf->lastPage();
$pdf->Output($nama_laporan . '.pdf', 'I');
