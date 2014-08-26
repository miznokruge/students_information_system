<?php
App::uses('AppController', 'Controller');

/**
 * Sets Controller
 *
 * @property Set $Set
 * @property PaginatorComponent $Paginator
 */
class SetsController extends AppController {

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

        $cond = '';
        if ($this->request->query) {
            $cond = $this->request->query['search'];
            $this->Paginator->settings = array(
                'conditions' => array('Set.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term', $cond);
        $this->Set->recursive = 0;
        $this->set('sets', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Set->exists($id)) {
            throw new NotFoundException(__('Invalid set'));
        }
        $options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
        $this->set('set', $this->Set->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Set->create();
            if ($this->Set->save($this->request->data)) {
                $this->Util->setFlash(__('The set has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The set could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Set->Category->find('list');
        $questionOrders = $this->Set->QuestionOrder->find('list');
        $this->set(compact('categories', 'questionOrders'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Set->exists($id)) {
            throw new NotFoundException(__('Invalid set'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Set->save($this->request->data)) {
                $this->Util->setFlash(__('The set has been saved.'), 'success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The set could not be saved. Please, try again.'), 'error');
            }
        } else {
            $options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
            $this->request->data = $this->Set->find('first', $options);
        }
        $categories = $this->Set->Category->find('list');
        $questionOrders = $this->Set->QuestionOrder->find('list');
        $this->set(compact('categories', 'questionOrders'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Set->id = $id;
        if (!$this->Set->exists()) {
            throw new NotFoundException(__('Invalid set'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Set->delete()) {
            $this->Util->setFlash(__('The set has been deleted.'));
        } else {
            $this->Util->setFlash(__('The set could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
