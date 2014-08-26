<?php
App::uses('AppController', 'Controller');
/**
 * LoginTokens Controller
 *
 * @property LoginToken $LoginToken
 * @property PaginatorComponent $Paginator
 */
class LoginTokensController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
    
        $cond='';
        if ($this->request->query) {
            $cond=$this->request->query['search'];
            $this->Paginator->settings = array(
                'conditions' =>array('LoginToken.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->LoginToken->recursive = 0;
		$this->set('loginTokens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LoginToken->exists($id)) {
			throw new NotFoundException(__('Invalid login token'));
		}
		$options = array('conditions' => array('LoginToken.' . $this->LoginToken->primaryKey => $id));
		$this->set('loginToken', $this->LoginToken->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LoginToken->create();
			if ($this->LoginToken->save($this->request->data)) {
				$this->Session->setFlash(__('The login token has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login token could not be saved. Please, try again.'));
			}
		}
		$users = $this->LoginToken->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LoginToken->exists($id)) {
			throw new NotFoundException(__('Invalid login token'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LoginToken->save($this->request->data)) {
				$this->Session->setFlash(__('The login token has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login token could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LoginToken.' . $this->LoginToken->primaryKey => $id));
			$this->request->data = $this->LoginToken->find('first', $options);
		}
		$users = $this->LoginToken->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LoginToken->id = $id;
		if (!$this->LoginToken->exists()) {
			throw new NotFoundException(__('Invalid login token'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LoginToken->delete()) {
			$this->Session->setFlash(__('The login token has been deleted.'));
		} else {
			$this->Session->setFlash(__('The login token could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
