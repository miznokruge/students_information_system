<?php
App::uses('AppController', 'Controller');
/**
 * Detentions Controller
 *
 * @property Detention $Detention
 * @property PaginatorComponent $Paginator
 */
class DetentionsController extends AppController {

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
		$this->Detention->recursive = 0;
		$this->set('detentions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Detention->exists($id)) {
			throw new NotFoundException(__('Invalid detention'));
		}
		$options = array('conditions' => array('Detention.' . $this->Detention->primaryKey => $id));
		$this->set('detention', $this->Detention->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Detention->create();
			if ($this->Detention->save($this->request->data)) {
				$this->Session->setFlash(__('The detention has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detention could not be saved. Please, try again.'));
			}
		}
		$students = $this->Detention->Student->find('list');
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
		if (!$this->Detention->exists($id)) {
			throw new NotFoundException(__('Invalid detention'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Detention->save($this->request->data)) {
				$this->Session->setFlash(__('The detention has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detention could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Detention.' . $this->Detention->primaryKey => $id));
			$this->request->data = $this->Detention->find('first', $options);
		}
		$students = $this->Detention->Student->find('list');
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
		$this->Detention->id = $id;
		if (!$this->Detention->exists()) {
			throw new NotFoundException(__('Invalid detention'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Detention->delete()) {
			$this->Session->setFlash(__('The detention has been deleted.'));
		} else {
			$this->Session->setFlash(__('The detention could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
