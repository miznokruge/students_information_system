<?php
App::uses('AppController', 'Controller');
/**
 * Memberships Controller
 *
 * @property Membership $Membership
 * @property PaginatorComponent $Paginator
 */
class MembershipsController extends AppController {

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
                'conditions' =>array('Membership.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->Membership->recursive = 0;
		$this->set('memberships', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Membership->exists($id)) {
			throw new NotFoundException(__('Invalid membership'));
		}
		$options = array('conditions' => array('Membership.' . $this->Membership->primaryKey => $id));
		$this->set('membership', $this->Membership->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Membership->create();
			if ($this->Membership->save($this->request->data)) {
				$this->Session->setFlash(__('The membership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membership could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Membership->exists($id)) {
			throw new NotFoundException(__('Invalid membership'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Membership->save($this->request->data)) {
				$this->Session->setFlash(__('The membership has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membership could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Membership.' . $this->Membership->primaryKey => $id));
			$this->request->data = $this->Membership->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Membership->id = $id;
		if (!$this->Membership->exists()) {
			throw new NotFoundException(__('Invalid membership'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Membership->delete()) {
			$this->Session->setFlash(__('The membership has been deleted.'));
		} else {
			$this->Session->setFlash(__('The membership could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
