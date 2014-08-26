<?php
App::uses('AppController', 'Controller');
/**
 * UserGroupPermissions Controller
 *
 * @property UserGroupPermission $UserGroupPermission
 * @property PaginatorComponent $Paginator
 */
class UserGroupPermissionsController extends AppController {

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
                'conditions' =>array('UserGroupPermission.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->UserGroupPermission->recursive = 0;
		$this->set('userGroupPermissions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserGroupPermission->exists($id)) {
			throw new NotFoundException(__('Invalid user group permission'));
		}
		$options = array('conditions' => array('UserGroupPermission.' . $this->UserGroupPermission->primaryKey => $id));
		$this->set('userGroupPermission', $this->UserGroupPermission->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserGroupPermission->create();
			if ($this->UserGroupPermission->save($this->request->data)) {
				$this->Session->setFlash(__('The user group permission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group permission could not be saved. Please, try again.'));
			}
		}
		$userGroups = $this->UserGroupPermission->UserGroup->find('list');
		$this->set(compact('userGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserGroupPermission->exists($id)) {
			throw new NotFoundException(__('Invalid user group permission'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserGroupPermission->save($this->request->data)) {
				$this->Session->setFlash(__('The user group permission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group permission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserGroupPermission.' . $this->UserGroupPermission->primaryKey => $id));
			$this->request->data = $this->UserGroupPermission->find('first', $options);
		}
		$userGroups = $this->UserGroupPermission->UserGroup->find('list');
		$this->set(compact('userGroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserGroupPermission->id = $id;
		if (!$this->UserGroupPermission->exists()) {
			throw new NotFoundException(__('Invalid user group permission'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserGroupPermission->delete()) {
			$this->Session->setFlash(__('The user group permission has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user group permission could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
