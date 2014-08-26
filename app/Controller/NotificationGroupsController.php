<?php
App::uses('AppController', 'Controller');
/**
 * NotificationGroups Controller
 *
 * @property NotificationGroup $NotificationGroup
 * @property PaginatorComponent $Paginator
 */
class NotificationGroupsController extends AppController {

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
                'conditions' =>array('NotificationGroup.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->NotificationGroup->recursive = 0;
		$this->set('notificationGroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NotificationGroup->exists($id)) {
			throw new NotFoundException(__('Invalid notification group'));
		}
		$options = array('conditions' => array('NotificationGroup.' . $this->NotificationGroup->primaryKey => $id));
		$this->set('notificationGroup', $this->NotificationGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NotificationGroup->create();
			if ($this->NotificationGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The notification group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notification group could not be saved. Please, try again.'));
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
		if (!$this->NotificationGroup->exists($id)) {
			throw new NotFoundException(__('Invalid notification group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NotificationGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The notification group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notification group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NotificationGroup.' . $this->NotificationGroup->primaryKey => $id));
			$this->request->data = $this->NotificationGroup->find('first', $options);
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
		$this->NotificationGroup->id = $id;
		if (!$this->NotificationGroup->exists()) {
			throw new NotFoundException(__('Invalid notification group'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NotificationGroup->delete()) {
			$this->Session->setFlash(__('The notification group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The notification group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
