<?php
App::uses('AppController', 'Controller');

/**
 * Comments Controller
 *
 * @property Comment $Comment
 * @property PaginatorComponent $Paginator
 */
class CommentsController extends AppController {

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
                'conditions' => array('Comment.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term', $cond);
        $this->Comment->recursive = 0;
        $this->set('comments', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Comment->exists($id)) {
            throw new NotFoundException(__('Invalid comment'));
        }
        $options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
        $this->set('comment', $this->Comment->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($ajax = false) {
        if ($this->request->is('post')) {
            $this->Comment->create();
            $this->request->data['Comment']['time'] = date("Y-m-d H:i:s");
            if ($this->Comment->save($this->request->data)) {
                $this->Util->setFlash(__('The comment has been saved.'));
                if ($ajax) {
                    echo 'ok';
                    exit();
                } else {
                    return $this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Util->setFlash(__('The comment could not be saved. Please, try again.'));
            }
        }
        $sets = $this->Comment->Set->find('list');
        $users = $this->Comment->User->find('list');
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
        if (!$this->Comment->exists($id)) {
            throw new NotFoundException(__('Invalid comment'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Comment->save($this->request->data)) {
                $this->Util->setFlash(__('The comment has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The comment could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
            $this->request->data = $this->Comment->find('first', $options);
        }
        $sets = $this->Comment->Set->find('list');
        $users = $this->Comment->User->find('list');
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
        $this->Comment->id = $id;
        if (!$this->Comment->exists()) {
            throw new NotFoundException(__('Invalid comment'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Comment->delete()) {
            $this->Util->setFlash(__('The comment has been deleted.'));
        } else {
            $this->Util->setFlash(__('The comment could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
