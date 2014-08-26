<?php
App::uses('AppController', 'Controller');
/**
 * Behaviors Controller
 *
 * @property Behavior $Behavior
 * @property PaginatorComponent $Paginator
 */
class BehaviorsController extends AppController {

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
		$this->Behavior->recursive = 0;
		$this->set('behaviors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Behavior->exists($id)) {
			throw new NotFoundException(__('Invalid behavior'));
		}
		$options = array('conditions' => array('Behavior.' . $this->Behavior->primaryKey => $id));
		$this->set('behavior', $this->Behavior->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Behavior->create();
			if ($this->Behavior->save($this->request->data)) {
				$this->Session->setFlash(__('The behavior has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The behavior could not be saved. Please, try again.'));
			}
		}
		$students = $this->Behavior->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Behavior->exists($id)) {
			throw new NotFoundException(__('Invalid behavior'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Behavior->save($this->request->data)) {
				$this->Session->setFlash(__('The behavior has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The behavior could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Behavior.' . $this->Behavior->primaryKey => $id));
			$this->request->data = $this->Behavior->find('first', $options);
		}
		$students = $this->Behavior->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Behavior->id = $id;
		if (!$this->Behavior->exists()) {
			throw new NotFoundException(__('Invalid behavior'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Behavior->delete()) {
			$this->Session->setFlash(__('The behavior has been deleted.'));
		} else {
			$this->Session->setFlash(__('The behavior could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
