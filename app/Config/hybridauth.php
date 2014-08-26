<?php
$config['HybridAuth'] = array(
    'providers' => array(
        'OpenID' => array(
            'enabled' => true
        )
    ),
    'debug_mode' => (bool)Configure::read('debug'),
    'debug_file' => LOGS . 'hybridauth.log',
);