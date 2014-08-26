<?php
App::uses('AppController', 'Controller');

/**
 * Questions Controller
 *
 * @property Question $Question
 * @property PaginatorComponent $Paginator
 */
class QuestionsController extends AppController {

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
                'conditions' => array('Question.question LIKE ' => "%$cond%"),
                'limit' => 20
            );
        }
        $this->set('search_term', $cond);
        $this->Question->recursive = 0;
        $this->set('questions', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Question->exists($id)) {
            throw new NotFoundException(__('Invalid question'));
        }
        $options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
        $this->set('question', $this->Question->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Question->create();
            if ($this->request->data)
                if ($this->request->data['Question']['img'] != '') {
                    $now = time();
                    $localDir = '/img/questions/';
                    $upload_dir = dirname($_SERVER['SCRIPT_FILENAME']) . $localDir;
                    if (!file_exists($upload_dir)) {
                        mkdir($upload_dir, 0777, true);
                    }
                    $dat['image']['img'] = $this->request->data['Question']['img']['name'];
                    $dat['image']['type'] = substr(strrchr($this->request->data['Question']['img'] ['name'], '.'), 1);
                    $dat['image']['ext'] = '.' . substr($this->request->data['Question']['img']['name'], -3);
                    $datq['image']['img'] = $now . '.' . substr($this->request->data['Question']['img']['name'], -3);
                    $dat['image']['tmp_name'] = $this->request->data['Question']['img']['tmp_name'];
                    $dat['image']['upload_dir'] = $upload_dir;
                    $dat['image']['full_url'] = $upload_dir . $datq['image']['img'];
                    $dat['image']['url'] = $localDir . $datq['image']['img'];
                    $dat['image']['resized'] = $upload_dir . $now . "_100" . $dat['image']['ext'];
                    if (move_uploaded_file($dat['image']['tmp_name'], $dat['image']['full_url'])) {
                        //unlink($upload_dir . $this->request->data['Question']['old_file']);
                        //unlink($upload_dir . str_replace(".", "_100.", $book['Question']['old_file']));
                        $this->Util->Resize($dat['image']['full_url'], $dat['image']['resized'], $dat['image']['ext'], 200);

                        CakeLog::write('upload', 'upload sukses :' . $dat['image']['full_url']);
                    }
                    $this->request->data['Question']['imageext'] = $dat['image']['full_url'];
                    $this->request->data['Question']['image'] = $dat['image']['url'];
                }
            if ($this->Question->save($this->request->data)) {
                $this->Util->setFlash(__('The question has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The question could not be saved. Please, try again.'));
            }
        }
        $sets = $this->Question->Set->find('list');
        $this->set(compact('sets'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Question->exists($id)) {
            throw new NotFoundException(__('Invalid question'));
        }
        if ($this->request->is(array('post', 'put'))) {

            if ($this->request->data['Question']['img'] != '') {
                $now = time();
                $localDir = '/img/questions/';
                $upload_dir = dirname($_SERVER['SCRIPT_FILENAME']) . $localDir;
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                $dat['image']['img'] = $this->request->data['Question']['img']['name'];
                $dat['image']['type'] = substr(strrchr($this->request->data['Question']['img'] ['name'], '.'), 1);
                $dat['image']['ext'] = '.' . substr($this->request->data['Question']['img']['name'], -3);
                $datq['image']['img'] = $now . '.' . substr($this->request->data['Question']['img']['name'], -3);
                $dat['image']['tmp_name'] = $this->request->data['Question']['img']['tmp_name'];
                $dat['image']['upload_dir'] = $upload_dir;
                $dat['image']['full_url'] = $upload_dir . $datq['image']['img'];
                $dat['image']['url'] = $localDir . $datq['image']['img'];
                $dat['image']['resized'] = $upload_dir . $now . "_100" . $dat['image']['ext'];
                if (move_uploaded_file($dat['image']['tmp_name'], $dat['image']['full_url'])) {
                    //unlink($upload_dir . $this->request->data['Question']['old_file']);
                    //unlink($upload_dir . str_replace(".", "_100.", $book['Question']['old_file']));
                    $this->Util->Resize($dat['image']['full_url'], $dat['image']['resized'], $dat['image']['ext'], 200);

                    CakeLog::write('upload', 'upload sukses :' . $dat['image']['full_url']);
                }
                $this->request->data['Question']['imageext'] = $dat['image']['full_url'];
                $this->request->data['Question']['image'] = $dat['image']['url'];
            }
            if ($this->Question->save($this->request->data)) {
                $this->Util->setFlash(__('The question has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The question could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
            $this->request->data = $this->Question->find('first', $options);
        }
        $sets = $this->Question->Set->find('list');
        $this->set(compact('sets'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Question->id = $id;
        if (!$this->Question->exists()) {
            throw new NotFoundException(__('Invalid question'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Question->delete()) {
            $this->Util->setFlash(__('The question has been deleted.'));
        } else {
            $this->Util->setFlash(__('The question could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
