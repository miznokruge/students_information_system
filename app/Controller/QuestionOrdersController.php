<?php
App::uses('AppController', 'Controller');
/**
 * QuestionOrders Controller
 *
 * @property QuestionOrder $QuestionOrder
 * @property PaginatorComponent $Paginator
 */
class QuestionOrdersController extends AppController {

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
                'conditions' =>array('QuestionOrder.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->QuestionOrder->recursive = 0;
		$this->set('questionOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionOrder->exists($id)) {
			throw new NotFoundException(__('Invalid question order'));
		}
		$options = array('conditions' => array('QuestionOrder.' . $this->QuestionOrder->primaryKey => $id));
		$this->set('questionOrder', $this->QuestionOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionOrder->create();
			if ($this->QuestionOrder->save($this->request->data)) {
				$this->Util->setFlash(__('The question order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The question order could not be saved. Please, try again.'));
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
		if (!$this->QuestionOrder->exists($id)) {
			throw new NotFoundException(__('Invalid question order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QuestionOrder->save($this->request->data)) {
				$this->Util->setFlash(__('The question order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The question order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionOrder.' . $this->QuestionOrder->primaryKey => $id));
			$this->request->data = $this->QuestionOrder->find('first', $options);
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
		$this->QuestionOrder->id = $id;
		if (!$this->QuestionOrder->exists()) {
			throw new NotFoundException(__('Invalid question order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QuestionOrder->delete()) {
			$this->Util->setFlash(__('The question order has been deleted.'));
		} else {
			$this->Util->setFlash(__('The question order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
