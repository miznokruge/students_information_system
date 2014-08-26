<?php
App::uses('AppController', 'Controller');
/**
 * Transcripts Controller
 *
 * @property Transcript $Transcript
 * @property PaginatorComponent $Paginator
 */
class TranscriptsController extends AppController {

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
                'conditions' =>array('Transcript.name LIKE ' => "$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term',$cond);
		$this->Transcript->recursive = 0;
		$this->set('transcripts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transcript->exists($id)) {
			throw new NotFoundException(__('Invalid transcript'));
		}
		$options = array('conditions' => array('Transcript.' . $this->Transcript->primaryKey => $id));
		$this->set('transcript', $this->Transcript->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transcript->create();
			if ($this->Transcript->save($this->request->data)) {
				$this->Session->setFlash(__('The transcript has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transcript could not be saved. Please, try again.'));
			}
		}
		$students = $this->Transcript->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Transcript->exists($id)) {
			throw new NotFoundException(__('Invalid transcript'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transcript->save($this->request->data)) {
				$this->Session->setFlash(__('The transcript has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transcript could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transcript.' . $this->Transcript->primaryKey => $id));
			$this->request->data = $this->Transcript->find('first', $options);
		}
		$students = $this->Transcript->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Transcript->id = $id;
		if (!$this->Transcript->exists()) {
			throw new NotFoundException(__('Invalid transcript'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transcript->delete()) {
			$this->Session->setFlash(__('The transcript has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transcript could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
