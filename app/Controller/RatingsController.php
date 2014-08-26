<?php
App::uses('AppController', 'Controller');
/**
 * Ratings Controller
 *
 * @property Rating $Rating
 * @property PaginatorComponent $Paginator
 */
class RatingsController extends AppController {

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
                'conditions' =>array('Rating.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->Rating->recursive = 0;
		$this->set('ratings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rating->exists($id)) {
			throw new NotFoundException(__('Invalid rating'));
		}
		$options = array('conditions' => array('Rating.' . $this->Rating->primaryKey => $id));
		$this->set('rating', $this->Rating->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rating->create();
			if ($this->Rating->save($this->request->data)) {
				$this->Util->setFlash(__('The rating has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The rating could not be saved. Please, try again.'));
			}
		}
		$users = $this->Rating->User->find('list');
		$sets = $this->Rating->Set->find('list');
		$this->set(compact('users', 'sets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rating->exists($id)) {
			throw new NotFoundException(__('Invalid rating'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rating->save($this->request->data)) {
				$this->Util->setFlash(__('The rating has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The rating could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rating.' . $this->Rating->primaryKey => $id));
			$this->request->data = $this->Rating->find('first', $options);
		}
		$users = $this->Rating->User->find('list');
		$sets = $this->Rating->Set->find('list');
		$this->set(compact('users', 'sets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Rating->id = $id;
		if (!$this->Rating->exists()) {
			throw new NotFoundException(__('Invalid rating'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rating->delete()) {
			$this->Util->setFlash(__('The rating has been deleted.'));
		} else {
			$this->Util->setFlash(__('The rating could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
