<?php
App::import('Vendor', 'tcpdf/tcpdf');

class XTCPDF extends TCPDF {

    var $xheadertext = 'PDF created using CakePHP and TCPDF';
    var $xheadercolor = array(0, 0, 200);
    var $nama_aplikasi = 'Copyright © Mizno Kruge. All rights reserved.';
    var $xfooterfont = PDF_FONT_NAME_MAIN;
    var $xfooterfontsize = 6;
    var $namaorg = 'PT. Gaivo Systemworks';
    var $alamat = "Graha Raflesia, Jl.Raflesia Selatan 11 no 10 Citra Raya, Tangerang";
    var $telp = '+62 21 2901 3223';
    var $fax = "+62 21 2901 3223";
    var $email = 'info@miznokruge.net';
    var $website = 'http://www.miznokruge.net';
    var $logo = '../webroot/img/logo.png';

    /**
     * Overwrites the default header
     * set the text in the view using
     *    $fpdf->xheadertext = 'YOUR ORGANIZATION';
     * set the fill color in the view using
     *    $fpdf->xheadercolor = array(0,0,100); (r, g, b)
     * set the font in the view using
     *    $fpdf->setHeaderFont(array('YourFont','',fontsize));
     */
    function Header() {
        $style = array('width' => 0.3, 'cap' => 'butt', 'join' => '', 'dash' => 0, 'color' => array(0, 0, 0));
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        //$this->Cell(0, 10, '<img src="'.$img_file.'">');
        $this->SetFont('helvetica', 'B', 9);
        $this->Cell(0, 20, $this->namaorg, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->SetFont('helvetica', '', 6);
        $this->Ln(5);
        $this->Cell(0, 10, $this->alamat, 0, false, 'C', 0, '', 0, false, 'M', 'M');
//        $this->Ln(4);
//        $telp = 'Telp : ' . $this->telp;
//        $this->Cell(0, 10, $telp, 0, false, 'C', 0, '', 0, false, 'M', 'M');
//        $this->Ln(4);
//        $this->Cell(0, 10, ' Fax : ' . $this->fax, 0, false, 'C', 0, '', 0, false, 'M', 'M');
//        $this->Ln(4);
//        $this->Cell(0, 10, $this->email . ' ' . $this->website, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Image($this->logo, 8, 3, 6, 6, '', '', '', false, 300, '', false, false, 0);
        $this->Line(0, 13, 1000, 25, $style);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
    }

    /**
     * Overwrites the default footer
     * set the text in the view using
     * $fpdf->xfootertext = 'Copyright Â© %d YOUR ORGANIZATION. All rights reserved.';
     */
    function Footer() {
        $year = date('Y');
        $footertext = 'Semoga lekas sembuh';
        $this->SetY(-25);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont($this->xfooterfont, '', $this->xfooterfontsize);
        $this->Cell(0, 8, $footertext, 'T', 1, 'C');
    }

}

?>