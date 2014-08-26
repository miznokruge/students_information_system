<?php
App::uses('AppController', 'Controller');
/**
 * EventTypes Controller
 *
 * @property EventType $EventType
 * @property PaginatorComponent $Paginator
 */
class EventTypesController extends AppController {

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
		$this->EventType->recursive = 0;
		$this->set('eventTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('Invalid event type'));
		}
		$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
		$this->set('eventType', $this->EventType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventType->create();
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('The event type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.'));
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
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('Invalid event type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('The event type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
			$this->request->data = $this->EventType->find('first', $options);
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
		$this->EventType->id = $id;
		if (!$this->EventType->exists()) {
			throw new NotFoundException(__('Invalid event type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventType->delete()) {
			$this->Session->setFlash(__('The event type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The event type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
