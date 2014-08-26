<?php
App::uses('AppController', 'Controller');

/**
 * Sets Controller
 *
 * @property Set $Set
 * @property PaginatorComponent $Paginator
 */
class ExamController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = 'Set';
    public $helpers = array('Timeago');

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
        $this->Session->write('exam_session_id', $this->Util->generateNoTransaksi());
        $this->Set->recursive = 2;
        $this->set('jawaban', false);
        $this->request->data['eval'] = array();
        if ($this->request->is("post")) {
            $i = 0;
            $r = 0;
            $w = 0;
            foreach ($this->request->data['exam'] as $x) {
                if (isset($x['qst'])) {

                    $this->loadModel('Question');
                    $data = $this->Question->read(null, $x['qst']);
                    $solution = $data['Question']['solution'];
                    if ($x['answer'] == $solution) {
                        $r++;
                        $ket = 'benar';
                    } else {
                        $w++;
                        $ket = 'salah';
                    }
                    $this->request->data['eval'][] = array('question_id' => $x['qst'],
                        'answer' => $x['answer'],
                        'solution' => $solution,
                        'ket' => $ket,
                        'solexp' => $data['Question']['solexp']);
                }
                $i++;
            }
            unset($this->request->data['exam']);
            $this->set('eval', $this->request->data['eval']);
            $this->set('jawaban', true);
            $this->set('right', $r);
            $this->set('wrong', $w);
            $this->set('jumlah', $i);
        }
        $this->loadModel("Set");
        if (!$this->Set->exists($id)) {
            throw new NotFoundException(__('Invalid set'));
        }
        $options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
        $this->set('set', $this->Set->find('first', $options));
        $this->set('js', array('jquery.magnific-popup.min'));
        $this->set('css', array('magnific-popup'));
    }

    public function display($question_id = null) {
        $this->layout = 'ajax';
        $this->loadModel("Question");
        if (!$this->Question->exists($question_id)) {
            throw new NotFoundException(__('Invalid question'));
        }
        $options = array('conditions' => array('Question.' . $this->Question->primaryKey => $question_id));
        $q = $this->Question->find('first', $options);
        $this->set('question', $q);
    }

    public function answer($question_id = null) {
        $this->layout = 'ajax';
        $this->loadModel("Question");
        if (!$this->Question->exists($question_id)) {
            throw new NotFoundException(__('Invalid question'));
        }
        $options = array('conditions' => array('Question.' . $this->Question->primaryKey => $question_id));
        $q = $this->Question->find('first', $options);
        if ($this->request->is('post')) {
            $this->loadModel('QuestionAnswer');
            $this->request->data['QuestionAnswer']['question_id'] = $question_id;
            $this->request->data['QuestionAnswer']['session_id'] = $this->Session->read('exam_session_id');
            $this->request->data['QuestionAnswer']['user_id'] = 1;
            $this->request->data['QuestionAnswer']['solution'] = $q['Question']['solution'];
            $this->request->data['QuestionAnswer']['date'] = date("Y-m-d H:i:s");
            $this->request->data['QuestionAnswer']['set_id'] = $q['Question']['set_id'];
            $this->QuestionAnswer->create();
            if ($this->QuestionAnswer->save($this->request->data)) {
                echo json_encode($this->getNextQuestion($q['Question']['set_id'], $question_id));
                exit();
            } else {
                $this->Util->setFlash(__('The question answer could not be saved. Please, try again.'));
            }
        }
        $this->set('question', $q);
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
                $this->Util->setFlash(__('The set has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Util->setFlash(__('The set could not be saved. Please, try again.'));
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
        } $this->request->allowMethod('post', 'delete');
        if ($this->Set->delete()) {
            $this->Util->setFlash(__('The set has been deleted.'));
        } else {
            $this->Util->setFlash(__('The set could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    private function getNextQuestion($set_id = null, $question_id = null) {
        $this->loadModel('Question');
        $x = $this->Question->find("first", array('conditions' => array(
                'Question.set_id' => $set_id,
                'Question.id >' => $question_id
        )));
        if (!$x)
            return 'null';
        else
            return $x;
    }

    private function getPrevQuestion($set_id = null, $question_id = null) {
        $this->loadModel('Question');
        $x = $this->Question->find("first", array('conditions' => array(
                'Question.set_id' => $set_id,
                'Question.id <' => $question_id
        )));
        if (!$x)
            return 'null';
        else
            return $x;
    }

}
