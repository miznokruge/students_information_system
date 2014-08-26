<?php
App::uses('AppController', 'Controller');
/**
 * StudentLoans Controller
 *
 * @property StudentLoan $StudentLoan
 * @property PaginatorComponent $Paginator
 */
class StudentLoansController extends AppController {

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
                'conditions' =>array('StudentLoan.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->StudentLoan->recursive = 0;
		$this->set('studentLoans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StudentLoan->exists($id)) {
			throw new NotFoundException(__('Invalid student loan'));
		}
		$options = array('conditions' => array('StudentLoan.' . $this->StudentLoan->primaryKey => $id));
		$this->set('studentLoan', $this->StudentLoan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentLoan->create();
			if ($this->StudentLoan->save($this->request->data)) {
				$this->Session->setFlash(__('The student loan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student loan could not be saved. Please, try again.'));
			}
		}
		$students = $this->StudentLoan->Student->find('list');
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
		if (!$this->StudentLoan->exists($id)) {
			throw new NotFoundException(__('Invalid student loan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StudentLoan->save($this->request->data)) {
				$this->Session->setFlash(__('The student loan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student loan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StudentLoan.' . $this->StudentLoan->primaryKey => $id));
			$this->request->data = $this->StudentLoan->find('first', $options);
		}
		$students = $this->StudentLoan->Student->find('list');
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
		$this->StudentLoan->id = $id;
		if (!$this->StudentLoan->exists()) {
			throw new NotFoundException(__('Invalid student loan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StudentLoan->delete()) {
			$this->Session->setFlash(__('The student loan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The student loan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
