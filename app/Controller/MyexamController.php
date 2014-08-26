<?php
App::uses('AppController', 'Controller');

/**
 * Statistics Controller
 *
 * @property Statistic $Statistic
 * @property PaginatorComponent $Paginator
 */
class MyexamController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    var $uses = array('Statistic');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $cond = '';
        if ($this->request->query) {
            $cond = $this->request->query['search'];
            $this->Paginator->settings = array(
                'conditions' => array('Statistic.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        } else {
            $this->Paginator->settings = array(
                'conditions' => array('Statistic.user_id' => $this->UserAuth->getUserId())
            );
        }
        $this->set('search_term', $cond);
        $this->Statistic->recursive = 0;
        $this->set('statistics', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Statistic->exists($id)) {
            throw new NotFoundException(__('Invalid statistic'));
        }
        $options = array('conditions' => array('Statistic.' . $this->Statistic->primaryKey => $id));

        $this->set('statistic', $this->Statistic->find('first', $options));
        $options2 = array('conditions' => array('Statistic.' . $this->Statistic->primaryKey . ' !=' => $id));
        $this->set('other', $this->Statistic->find('all', $options2));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Statistic->create();
            if ($this->Statistic->save($this->request->data)) {
                $this->Util->setFlash(__('The statistic has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The statistic could not be saved. Please, try again.'));
            }
        }
        $sets = $this->Statistic->Set->find('list');
        $users = $this->Statistic->User->find('list');
        $this->set(compact('sets', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Statistic->exists($id)) {
            throw new NotFoundException(__('Invalid statistic'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Statistic->save($this->request->data)) {
                $this->Util->setFlash(__('The statistic has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The statistic could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Statistic.' . $this->Statistic->primaryKey => $id));
            $this->request->data = $this->Statistic->find('first', $options);
        }
        $sets = $this->Statistic->Set->find('list');
        $users = $this->Statistic->User->find('list');
        $this->set(compact('sets', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Statistic->id = $id;
        if (!$this->Statistic->exists()) {
            throw new NotFoundException(__('Invalid statistic'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Statistic->delete()) {
            $this->Util->setFlash(__('The statistic has been deleted.'));
        } else {
            $this->Util->setFlash(__('The statistic could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
