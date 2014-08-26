<?php
App::uses('AppController', 'Controller');
/**
 * QuestionAnswers Controller
 *
 * @property QuestionAnswer $QuestionAnswer
 * @property PaginatorComponent $Paginator
 */
class QuestionAnswersController extends AppController {

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
                'conditions' =>array('QuestionAnswer.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->QuestionAnswer->recursive = 0;
		$this->set('questionAnswers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid question answer'));
		}
		$options = array('conditions' => array('QuestionAnswer.' . $this->QuestionAnswer->primaryKey => $id));
		$this->set('questionAnswer', $this->QuestionAnswer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionAnswer->create();
			if ($this->QuestionAnswer->save($this->request->data)) {
				$this->Util->setFlash(__('The question answer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The question answer could not be saved. Please, try again.'));
			}
		}
		$questions = $this->QuestionAnswer->Question->find('list');
		$users = $this->QuestionAnswer->User->find('list');
		$this->set(compact('questions', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QuestionAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid question answer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QuestionAnswer->save($this->request->data)) {
				$this->Util->setFlash(__('The question answer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The question answer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionAnswer.' . $this->QuestionAnswer->primaryKey => $id));
			$this->request->data = $this->QuestionAnswer->find('first', $options);
		}
		$questions = $this->QuestionAnswer->Question->find('list');
		$users = $this->QuestionAnswer->User->find('list');
		$this->set(compact('questions', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QuestionAnswer->id = $id;
		if (!$this->QuestionAnswer->exists()) {
			throw new NotFoundException(__('Invalid question answer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QuestionAnswer->delete()) {
			$this->Util->setFlash(__('The question answer has been deleted.'));
		} else {
			$this->Util->setFlash(__('The question answer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
