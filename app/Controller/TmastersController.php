<?php
App::uses('AppController', 'Controller');
/**
 * Tmasters Controller
 *
 * @property Tmaster $Tmaster
 * @property PaginatorComponent $Paginator
 */
class TmastersController extends AppController {

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
                'conditions' =>array('Tmaster.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->Tmaster->recursive = 0;
		$this->set('tmasters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tmaster->exists($id)) {
			throw new NotFoundException(__('Invalid tmaster'));
		}
		$options = array('conditions' => array('Tmaster.' . $this->Tmaster->primaryKey => $id));
		$this->set('tmaster', $this->Tmaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tmaster->create();
			if ($this->Tmaster->save($this->request->data)) {
				$this->Util->setFlash(__('The tmaster has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The tmaster could not be saved. Please, try again.'));
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
		if (!$this->Tmaster->exists($id)) {
			throw new NotFoundException(__('Invalid tmaster'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tmaster->save($this->request->data)) {
				$this->Util->setFlash(__('The tmaster has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The tmaster could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tmaster.' . $this->Tmaster->primaryKey => $id));
			$this->request->data = $this->Tmaster->find('first', $options);
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
		$this->Tmaster->id = $id;
		if (!$this->Tmaster->exists()) {
			throw new NotFoundException(__('Invalid tmaster'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tmaster->delete()) {
			$this->Util->setFlash(__('The tmaster has been deleted.'));
		} else {
			$this->Util->setFlash(__('The tmaster could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
