<?php
App::uses('AppController', 'Controller');
/**
 * StudentsClasses Controller
 *
 * @property StudentsClass $StudentsClass
 * @property PaginatorComponent $Paginator
 */
class StudentsClassesController extends AppController {

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
                'conditions' =>array('StudentsClass.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->StudentsClass->recursive = 0;
		$this->set('studentsClasses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentsClass->exists($id)) {
			throw new NotFoundException(__('Invalid students class'));
		}
		$options = array('conditions' => array('StudentsClass.' . $this->StudentsClass->primaryKey => $id));
		$this->set('studentsClass', $this->StudentsClass->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentsClass->create();
			if ($this->StudentsClass->save($this->request->data)) {
				$this->Session->setFlash(__('The students class has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The students class could not be saved. Please, try again.'));
			}
		}
		$teachers = $this->StudentsClass->Teacher->find('list');
		$students = $this->StudentsClass->Student->find('list');
		$this->set(compact('teachers', 'students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->StudentsClass->exists($id)) {
			throw new NotFoundException(__('Invalid students class'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentsClass->save($this->request->data)) {
				$this->Session->setFlash(__('The students class has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The students class could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentsClass.' . $this->StudentsClass->primaryKey => $id));
			$this->request->data = $this->StudentsClass->find('first', $options);
		}
		$teachers = $this->StudentsClass->Teacher->find('list');
		$students = $this->StudentsClass->Student->find('list');
		$this->set(compact('teachers', 'students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->StudentsClass->id = $id;
		if (!$this->StudentsClass->exists()) {
			throw new NotFoundException(__('Invalid students class'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StudentsClass->delete()) {
			$this->Session->setFlash(__('The students class has been deleted.'));
		} else {
			$this->Session->setFlash(__('The students class could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
