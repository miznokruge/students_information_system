<?php
App::uses('AppController', 'Controller');
/**
 * StudentEvents Controller
 *
 * @property StudentEvent $StudentEvent
 * @property PaginatorComponent $Paginator
 */
class StudentEventsController extends AppController {

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
		$this->StudentEvent->recursive = 0;
		$this->set('studentEvents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentEvent->exists($id)) {
			throw new NotFoundException(__('Invalid student event'));
		}
		$options = array('conditions' => array('StudentEvent.' . $this->StudentEvent->primaryKey => $id));
		$this->set('studentEvent', $this->StudentEvent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentEvent->create();
			if ($this->StudentEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The student event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student event could not be saved. Please, try again.'));
			}
		}
		$students = $this->StudentEvent->Student->find('list');
		$eventTypes = $this->StudentEvent->EventType->find('list');
		$this->set(compact('students', 'eventTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StudentEvent->exists($id)) {
			throw new NotFoundException(__('Invalid student event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The student event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentEvent.' . $this->StudentEvent->primaryKey => $id));
			$this->request->data = $this->StudentEvent->find('first', $options);
		}
		$students = $this->StudentEvent->Student->find('list');
		$eventTypes = $this->StudentEvent->EventType->find('list');
		$this->set(compact('students', 'eventTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StudentEvent->id = $id;
		if (!$this->StudentEvent->exists()) {
			throw new NotFoundException(__('Invalid student event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StudentEvent->delete()) {
			$this->Session->setFlash(__('The student event has been deleted.'));
		} else {
			$this->Session->setFlash(__('The student event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
