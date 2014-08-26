<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// file: /app/views/helpers/mysession.php
/*
 * Mysession Helper
 * extends the CakePHP session helper
 *
 */
class CustomSessionHelper extends SessionHelper {

    // init
    var $__active = true;

    // constructor
    function __construct($base = null) {
        // copied from the parent SessionHelper
        if (!defined('AUTO_SESSION') || AUTO_SESSION === true) {
            parent::__construct($base, false);
        } else {
            $this->__active = false;
        }
    }

    /*
     * flash()
     * flashes a message on the screen with a coloured box indicating success, failure or normal
     */

    function flash() {
        // init
        $output = '';

        // get the flash msg array from the session
        $data = parent::read('flash');

        // data looks like this
        // $data = array('flash message', 'success');
        // delete the session variable
        parent::del('flash');

        // if the flash message is not empty
        if (!empty($data[0])) {
            // switch depending on flash type
            switch ($data[1]) {
                case 'success':
                    // print out a div with a success class
                    $output .= '<div class="alert alert-success alert-dismissable" id="flash_message">';
                    break;
                case 'failure':
                    // print out a div with a failure class
                    $output .= '<div class="alert alert-danger alert-dismissable" id="flash_message">';
                    break;
                default:
                    // print out a default flash class
                    $output .= '<div class="alert alert-info alert-dismissable" id="flash_message">';
                    break;
            }
// save the flash message with the closing div
            $output .= $data[0] . '</div>';
        }
        return $output;
    }

}
