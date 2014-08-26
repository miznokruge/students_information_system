<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('Xml', 'Utility');

class SitemapController extends AppController {

    var $components = array('RequestHandler');
    var $helpers = array('Time', 'GoogleMapV3');

    function index() {
        Configure::write('debug', 1);
        /* turn off browser caching */
        header("Expires: Mon, 20 Dec 1998 01:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Content-Type: text/xml");
        $this->RequestHandler->respondAs('xml');
    }

    public function googlemap() {

    }

}

?>
