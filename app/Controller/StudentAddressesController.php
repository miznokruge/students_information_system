<?php
App::uses('AppController', 'Controller');
/**
 * StudentAddresses Controller
 *
 * @property StudentAddress $StudentAddress
 * @property PaginatorComponent $Paginator
 */
class StudentAddressesController extends AppController {

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
                'conditions' =>array('StudentAddress.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->StudentAddress->recursive = 0;
		$this->set('studentAddresses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentAddress->exists($id)) {
			throw new NotFoundException(__('Invalid student address'));
		}
		$options = array('conditions' => array('StudentAddress.' . $this->StudentAddress->primaryKey => $id));
		$this->set('studentAddress', $this->StudentAddress->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentAddress->create();
			if ($this->StudentAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The student address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student address could not be saved. Please, try again.'));
			}
		}
		$students = $this->StudentAddress->Student->find('list');
		$addresses = $this->StudentAddress->Address->find('list');
		$this->set(compact('students', 'addresses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StudentAddress->exists($id)) {
			throw new NotFoundException(__('Invalid student address'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentAddress->save($this->request->data)) {
				$this->Session->setFlash(__('The student address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student address could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentAddress.' . $this->StudentAddress->primaryKey => $id));
			$this->request->data = $this->StudentAddress->find('first', $options);
		}
		$students = $this->StudentAddress->Student->find('list');
		$addresses = $this->StudentAddress->Address->find('list');
		$this->set(compact('students', 'addresses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StudentAddress->id = $id;
		if (!$this->StudentAddress->exists()) {
			throw new NotFoundException(__('Invalid student address'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StudentAddress->delete()) {
			$this->Session->setFlash(__('The student address has been deleted.'));
		} else {
			$this->Session->setFlash(__('The student address could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
