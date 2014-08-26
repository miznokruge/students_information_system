<?php @mysql_connect('localhost','root','p1ner4123');
@mysql_select_db('c_db');
#require_once('fn.php');
#require_once('config/lang/eng.php');
require_once('tcpdf.php');
$filename=time().'.pdf';
$id='1301899753-80F8C700-A817-1615-4A22-CFE33F5466D61301891865-';
#config end;
function str_right($value, $count){
        return substr($value, ($count*-1));
    }

    function str_left($string, $count){
        return substr($string, 0, $count);
    }
    
 function DateOnly($k) {
        $temp  = "";
        $day = date("d", strtotime($k));
        $month = date("m", strtotime($k));
        $year = date("Y", strtotime($k));
        $temp = $year."-".str_right("00".$month, 2)."-".str_right("00".$day, 2);
        return $temp;
    }


#query start;
$Q=mysql_query("SELECT * FROM transact WHERE TransactID='".$id."' order by ID ASC");
$Q2=mysql_query("SELECT * FROM transact WHERE TransactID='".$id."' order by ID ASC");
$row=mysql_fetch_array($Q);
$Qa=mysql_query("select*from agent WHERE AgentID='".$row['agent']."'");
$rA=mysql_fetch_array($Qa);

$addr=ucwords($rA['Address']);
$addr.=' , ';
$addr.='Phone : '.$rA['Phone'].' , Fax : '.$rA['Fax'].' , Email : '.$rA['Email'];
#query end#
//hotel query
$qh=mysql_query("select*from thotel where HotelId='".$row['hotel']."'");
$rh=mysql_fetch_array($qh);

#config
define('K_TCPDF_EXTERNAL_CONFIG', FALSE);
define('K_PATH_MAIN', '');
#end config




// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mizno Kruge');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData('../images/ri.jpg', PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
$pdf->SetHeaderData('/gfx/1307516315.jpg','20',$rA['AgentName'], $addr);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------
$style = array(
	'position' => '',
	'align' => 'C',
	'stretch' => false,
	'fitwidth' => true,
	'cellfitalign' => '',
	'border' => true,
	'hpadding' => 'auto',
	'vpadding' => 'auto',
	'fgcolor' => array(0,0,0),
	'bgcolor' => false, //array(255,255,255),
	'text' => true,
	'font' => 'helvetica',
	'fontsize' => 8,
	'stretchtext' => 4
);

$pdf->SetFont('helvetica', 'B', 20);
$pdf->AddPage();
$pdf->Write($h=0,'Hotel Voucher', $link='', $fill=0, $align='C', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);
$pdf->SetFont('helvetica', '', 9);
$pdf->Ln(5);
$tbl = '<table border="0" cellpadding="2" cellspacing="2" width="100%">
	 <tr>
	  <td align="left" colspan="4"><h3>'.strtoupper($rh['Hotelname']).'</h3>
		<br />
		Phone : '.$rh['Telp'].'
		<br />
		Address : '.ucwords($rh['Address']).'
	  </td>
	  <td align="left" colspan="2">
		<p>VOUCHER NO  &nbsp;: <b>'.$row['VID'].'</b></p>
		<br />
		<p>ISSUED DATE &nbsp;&nbsp;: <b>'.DateOnly($row['v_issue_date']).'</b></p>
	  </td>
	 </tr>
	 </table>
	 <p>&nbsp;</p>
	 ';
$tbl.='
	<table width="100%" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <td width="200" valign="top">Guest / Group&rsquo;s Names</td>
        <td width="10" valign="top" class="pts12"><span> :</span></td>
        <td valign="top" class="pts12"><strong>'.ucwords($row['name']).' '.ucwords($row['surname']).','.$row['prefix'].'</strong></td>
      </tr>
      <tr>
        <td valign="top">Checkin Date</td>
        <td valign="top" class="pts12"><span>:</span></td>
        <td valign="top" class="pts12"><strong>'.$row['checkin'].'</strong></td>
      </tr>
    </table>';
#$tbl.='<table width="100%"><tr><td><hr></td></tr></table>';
$tbl.='<p>&nbsp;</p>';
#$tbl.='<table width="100%" border="0" cellspacing="1" cellpadding="5"><tr><td align="center">Name On Tickets</td></tr></table>';
$tbl.='<table width="100%" border="0" cellspacing="1" cellpadding="4" bgcolor="#FFFFFF">
        <tr bgcolor="#FFFFFF">
          <td width="10%" align="center"><strong>No</strong></td>
          <td width="50%" align="left"><strong>Name</strong></td>
          <td width="40%" align="center"><strong>Activity Category</strong></td>
       </tr>';
		$a=1;
		while($r=mysql_fetch_array($Q2)){
		  $Qtype=mysql_query("select*from rt WHERE rtype_id='".$r['rtype']."'");
		  $rQtype=mysql_fetch_array($Qtype);
		$tbl.='<tr bgcolor="#FFFFFF">
          <td align="center">'.$a.'.</td>
          <td align="left"><b>'.ucwords($r['surname']).' '.ucwords($r['name']).','.$r['prefix'].'</b></td>
          <td  align="center">'.ucwords($rQtype['rtype_name']).'
		  </td>
          </tr>';
		$a++;
		}
$tbl.='</table>';
$tbl.='<p>&nbsp;</p>';
$tbl.='<table width="100%"><tr><td><hr></td></tr></table>';
$tbl.='<table width="100%"><tr><td>Remarks: <span>Payment via Reservasi Integra</span></td></tr></table>';
$tbl.=$pdf->write1DBarcode($row['VID'].'- 128', 'C128', '150', '28', '', 18, 0.4, $style, 'N');
$pdf->write1DBarcode($row['VID'], 'C39', '10', '28', '', 18, 0.4, $style, 'N');
$tbl.=$pdf->Ln(10);

$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Output($filename, 'I');