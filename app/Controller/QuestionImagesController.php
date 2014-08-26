<?php
App::uses('AppController', 'Controller');
/**
 * QuestionImages Controller
 *
 * @property QuestionImage $QuestionImage
 * @property PaginatorComponent $Paginator
 */
class QuestionImagesController extends AppController {

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
                'conditions' =>array('QuestionImage.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->QuestionImage->recursive = 0;
		$this->set('questionImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionImage->exists($id)) {
			throw new NotFoundException(__('Invalid question image'));
		}
		$options = array('conditions' => array('QuestionImage.' . $this->QuestionImage->primaryKey => $id));
		$this->set('questionImage', $this->QuestionImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionImage->create();
			if ($this->QuestionImage->save($this->request->data)) {
				$this->Util->setFlash(__('The question image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The question image could not be saved. Please, try again.'));
			}
		}
		$questions = $this->QuestionImage->Question->find('list');
		$this->set(compact('questions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QuestionImage->exists($id)) {
			throw new NotFoundException(__('Invalid question image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QuestionImage->save($this->request->data)) {
				$this->Util->setFlash(__('The question image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Util->setFlash(__('The question image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionImage.' . $this->QuestionImage->primaryKey => $id));
			$this->request->data = $this->QuestionImage->find('first', $options);
		}
		$questions = $this->QuestionImage->Question->find('list');
		$this->set(compact('questions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QuestionImage->id = $id;
		if (!$this->QuestionImage->exists()) {
			throw new NotFoundException(__('Invalid question image'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QuestionImage->delete()) {
			$this->Util->setFlash(__('The question image has been deleted.'));
		} else {
			$this->Util->setFlash(__('The question image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
