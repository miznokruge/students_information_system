<?php
App::uses('AppController', 'Controller');
/**
 * Templates Controller
 *
 * @property Template $Template
 * @property PaginatorComponent $Paginator
 */
class TemplatesController extends AppController {

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
                'conditions' =>array('Template.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->Template->recursive = 0;
		$this->set('templates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Template->exists($id)) {
			throw new NotFoundException(__('Invalid template'));
		}
		$options = array('conditions' => array('Template.' . $this->Template->primaryKey => $id));
		$this->set('template', $this->Template->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Template->create();
			if ($this->Template->save($this->request->data)) {
				$this->Util->setFlash(__('The template has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The template could not be saved. Please, try again.'));
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
		if (!$this->Template->exists($id)) {
			throw new NotFoundException(__('Invalid template'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Template->save($this->request->data)) {
				$this->Util->setFlash(__('The template has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The template could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Template.' . $this->Template->primaryKey => $id));
			$this->request->data = $this->Template->find('first', $options);
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
		$this->Template->id = $id;
		if (!$this->Template->exists()) {
			throw new NotFoundException(__('Invalid template'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Template->delete()) {
			$this->Util->setFlash(__('The template has been deleted.'));
		} else {
			$this->Util->setFlash(__('The template could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
