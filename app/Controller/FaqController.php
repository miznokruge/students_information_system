<?php
App::uses('AppController', 'Controller');

/**
 * Faqs Controller
 *
 * @property Faq $Faq
 * @property PaginatorComponent $Paginator
 */
class FaqController extends AppController {

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
        $this->set('faqs', $this->Faq->find('all'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Faq->exists($id)) {
            throw new NotFoundException(__('Invalid faq'));
        }
        $options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
        $this->set('faq', $this->Faq->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function ask_question() {
        if ($this->request->is('post')) {
            if ($this->UserAuth->isLogged()) {
                $this->request->data['Faq']['name'] = $this->UserAuth->getUserName();
                $this->request->data['Faq']['email'] = $this->UserAuth->getUserEmail();
            }
            $this->Faq->create();
            if ($this->Faq->save($this->request->data)) {
                $this->Util->setFlash(__('The faq has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The faq could not be saved. Please, try again.'));
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
        if (!$this->Faq->exists($id)) {
            throw new NotFoundException(__('Invalid faq'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Faq->save($this->request->data)) {
                $this->Util->setFlash(__('The faq has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The faq could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
            $this->request->data = $this->Faq->find('first', $options);
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
        $this->Faq->id = $id;
        if (!$this->Faq->exists()) {
            throw new NotFoundException(__('Invalid faq'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Faq->delete()) {
            $this->Util->setFlash(__('The faq has been deleted.'));
        } else {
            $this->Util->setFlash(__('The faq could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
