<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppHelper', 'View/Helper');

class UtilHelper extends AppHelper {

    public $helpers = array('Session', 'Html');

    function answerMap($char) {
        switch ($char):
            case '1':
                $h = 'A';
                break;
            case '2':
                $h = 'B';
                break;
            case '3':
                $h = 'C';
                break;
            case '4':
                $h = 'D';
                break;
            case '5':
                $h = 'E';
                break;
        endswitch;
        return $h;
    }

    function secToMinute($sec) {
        return ($sec / 60);
    }

    public function flash(array $types = array()) {
        // Get the messages from the session
        $messages = (array) $this->Session->read('messages');
        $cMessages = (array) Configure::read('messages');
        if (!empty($cMessages)) {
            $messages = (array) Hash::merge($messages, $cMessages);
        }
        $html = '';
        if (!empty($messages)) {
            $html = '<div id="flash_message">';

            if ($types) {
                foreach ($types as $type) {
                    // Add a div for each message using the type as the class.
                    foreach ($messages as $messageType => $msgs) {
                        if ($messageType !== $type) {
                            continue;
                        }
                        foreach ((array) $msgs as $msg) {
                            $html .= $this->_message($msg, $messageType);
                        }
                    }
                }
            } else {
                foreach ($messages as $messageType => $msgs) {
                    foreach ((array) $msgs as $msg) {
                        $html .= $this->_message($msg, $messageType);
                    }
                }
            }
            $html .= '</div>';
            if ($types) {
                foreach ($types as $type) {
                    CakeSession::delete('messages.' . $type);
                    Configure::delete('messages.' . $type);
                }
            } else {
                CakeSession::delete('messages');
                Configure::delete('messages');
            }
        }

        return $html;
    }

    /**
     * Outputs a single flashMessage directly.
     * Note that this does not use the Session.
     *
     * @param string $message String to output.
     * @param string $type Type (success, warning, error, info)
     * @param bool $escape Set to false to disable escaping.
     * @return string HTML
     */
    public function flashMessage($msg, $type = 'info', $escape = true) {
        $html = '<div class="flash-messages flashMessages">';
        if ($escape) {
            $msg = h($msg);
        }
        $html .= $this->_message($msg, $type);
        $html .= '</div>';
        return $html;
    }

    /**
     * Formats a message
     *
     * @param string $msg Message to output.
     * @param string $type Type that will be formatted to a class tag.
     * @return string
     */
    protected function _message($msg, $type) {
        if (!empty($msg)) {
            return '<div class="alert alert-' . (!empty($type) ? '' . $type : '') . ' alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>' . ucfirst($type) . '!</strong><p>' . $msg . '</p></div>';
        }
        return '';
    }

    /**
     * Add a message on the fly
     *
     * @param string $msg
     * @param string $class
     * @return void
     */
    public function addFlashMessage($msg, $class = null) {
        CommonComponent::transientFlashMessage($msg, $class);
    }

}
