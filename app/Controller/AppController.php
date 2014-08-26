<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    private $myAllowedActions = array();
    public $components = array(
        'Paginator',
        'Session',
        'Cookie',
        'RequestHandler',
        'Email',
        'Util',
        'Usermgmt.UserAuth',
        'Ctrl'
    );
    public $helpers = array(
        'Session',
        'Util',
        'MyHtml',
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
        'Js',
        'Usermgmt.UserAuth',
//        'Auth' => array(
//            'authenticate' => array(
//                'HybridAuth.HybridAuth' => array(
//                    'registrationCallback' => 'hybridRegister'
//                )
//            )
//        )
    );

    private function userAuth() {
        $this->UserAuth->beforeFilter($this);
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $this->userAuth();
        $this->_setLanguage();
        # To enable portuguese language as main
        Configure::write('Config.language', 'eng');

        $this->loadModel("Config");
        $cekDebugMode = $this->Config->find("all");
        $config = array();
        foreach ($cekDebugMode as $x => $imin) {
            $config[$imin['Config']['name']] = array('v' => $imin['Config']['value'], 'e' => $imin['Config']['explanation']);
        }
        Configure::write('debug', $config['mode']['v']);
        $this->set('config', $config);
        if ($this->UserAuth->isLogged()) {
            $this->layout = strtolower($this->UserAuth->getGroupName());
        } else {
            $this->layout = 'guest';
        }

        //messagelist_unread
        $this->loadModel("Message");
        $this->set('list_message_unread', $this->Message->find("all", array('conditions' => array('Message.status' => 1))));

        //tasklist_unread
        $this->loadModel("Task");
        $this->set('list_task_unread', $this->Task->find("all", array('conditions' => array('Task.status' => 1))));
    
		$this->set('list_controller',$this->Ctrl->get());
		
		}

    private function _setLanguage() {
        //if the cookie was previously set, and Config.language has not been set
        //write the Config.language with the value from the Cookie
        if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
            $this->Session->write('Config.language', $this->Cookie->read('lang'));
        }
        //if the user clicked the language URL
        else if (isset($this->params['language']) &&
                ($this->params['language'] != $this->Session->read('Config.language'))
        ) {
            //then update the value in Session and the one in Cookie
            $this->Session->write('Config.language', $this->params['language']);
            $this->Cookie->write('lang', $this->params['language'], false, '20 days');
        }
    }

}
