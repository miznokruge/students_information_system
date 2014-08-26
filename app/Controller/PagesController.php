<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array();
    public $layout = 'default';
    public $helpers = array('Timeago');

    /**
     * Displays a view
     *
     * @param mixed What page to display
     * @return void
     * @throws NotFoundException When the view file could not be found
     * 	or MissingViewException in debug mode.
     */
    public function dashboard() {

    }

    public function x() {

    }

    public function inbox() {

    }

    public function task() {

    }

    public function profile() {

    }

    public function tour() {

    }

    public function faq() {
        $this->loadModel("Faq");
        $this->set('faqs', $this->Faq->find('all'));
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect(array("controller" => "users", "action" => "index"));
            } else {
                if ($this->request->is('post')) {
                    $this->Session->setFlash(__('Invalid username or password, try again'));
                }
            }
        }
        $this->set('js', array('demo/signin'));
        $this->set('css', array('pages/signin'));
    }

    public function index() {
		$this->loadModel("User");
		$users=$this->User->find("all");
        $js = array('jquery.cycle.all');
        $this->set(compact('js','users'));
    }

    public function invoice() {

    }

    public function elements() {

    }

    public function form() {

    }

    public function jquery() {

    }

    public function chart() {

    }

    public function signup() {

    }

    public function account() {

    }

    public function reports() {

    }

    public function login_ui() {

    }

    public function gallery() {

    }

    public function faq2() {

    }

    public function error() {

    }

    public function popup() {

    }

}
