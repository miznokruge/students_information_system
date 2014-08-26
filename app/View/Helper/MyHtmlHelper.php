<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('HtmlHelper', 'View/Helper');

class MyHtmlHelper extends HtmlHelper {

    public function url($url = null, $full = false) {
        if (!isset($url['language']) && isset($this->params['language'])) {
            $url['language'] = $this->params['language'];
        }
        return parent::url($url, $full);
    }

}
