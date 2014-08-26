<?php
App::uses('AppController', 'Controller');
/**
 * Acievements Controller
 *
 * @property Acievement $Acievement
 * @property PaginatorComponent $Paginator
 */
class AcievementsController extends AppController {

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
		$this->Acievement->recursive = 0;
		$this->set('acievements', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Acievement->exists($id)) {
			throw new NotFoundException(__('Invalid acievement'));
		}
		$options = array('conditions' => array('Acievement.' . $this->Acievement->primaryKey => $id));
		$this->set('acievement', $this->Acievement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acievement->create();
			if ($this->Acievement->save($this->request->data)) {
				$this->Session->setFlash(__('The acievement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acievement could not be saved. Please, try again.'));
			}
		}
		$students = $this->Acievement->Student->find('list');
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
		if (!$this->Acievement->exists($id)) {
			throw new NotFoundException(__('Invalid acievement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Acievement->save($this->request->data)) {
				$this->Session->setFlash(__('The acievement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acievement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Acievement.' . $this->Acievement->primaryKey => $id));
			$this->request->data = $this->Acievement->find('first', $options);
		}
		$students = $this->Acievement->Student->find('list');
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
		$this->Acievement->id = $id;
		if (!$this->Acievement->exists()) {
			throw new NotFoundException(__('Invalid acievement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Acievement->delete()) {
			$this->Session->setFlash(__('The acievement has been deleted.'));
		} else {
			$this->Session->setFlash(__('The acievement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
