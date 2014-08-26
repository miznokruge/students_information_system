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
        'Timeago',
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
		if ($this->UserAuth->isLogged()) {
            $this->layout = strtolower($this->UserAuth->getGroupName());
			if(strtolower($this->UserAuth->getGroupName()=='admin')){
				Configure::write('debug', $config['mode']['v']);
			}
        } else {
            $this->layout = 'guest';
        }

		$this->loadModel("Config");
        $cekDebugMode = $this->Config->find("all");
        $config = array();
        foreach ($cekDebugMode as $x => $imin) {
            $config[$imin['Config']['name']] = array('v' => $imin['Config']['value'], 'e' => $imin['Config']['explanation']);
        }
        
        $this->set('config', $config);
		
	}
}
