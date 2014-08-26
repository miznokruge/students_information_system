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
        $this->Paginator->settings = array(
            'limit' => 10
        );
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
    public function start($id = null) {
        $set = $this->Set->read(null, $id);
        $pass = $set['Set']['password'];
        if ($this->request->is('post')) {

            if ($pass != '') {
                if ($this->request->data['Set']['password'] == '') {
                    $this->Util->setFlash('Anda belum memasukkan enrollment key untuk ujian ini', 'error');
                } else {
                    if ($pass == $this->request->data['Set']['password']) {
                        $this->Session->write('Exam.start', $this->Util->generateNoTransaksi(30));
                    } else {
                        $this->Util->setFlash('Enrollment Key yang anda masukkan salah. Jika anda belum memiliki enrollment key, silakan kontak administrator', 'error');
                    }
                }
            } else {
                $this->Session->write('Exam.start', $this->Util->generateNoTransaksi(30));
            }
            $this->redirect(array("action" => "view", $id));
        }
    }

    public function view($id = null) {
        if ($this->Session->read('Exam.start') != '') {
            $start = true;
        } else {
            $start = false;
        }
        $this->set('start_exam', $start);
        $disable = false;
        $this->Set->recursive = 2;
        $this->set('jawaban', false);
        $this->loadModel('Question');
        $this->request->data['eval'] = array();
        if ($this->request->is("post")) {
            $i = 0;
            $r = 0;
            $w = 0;
            foreach ($this->request->data['exam'] as $x) {
                if (isset($x['qst'])) {
                    $data = $this->Question->read(null, $x['qst']);
                    $solution = $data['Question']['solution'];
                    if ($x['answer'] == $solution) {
                        $r++;
                        $ket = 'benar';
                        $right[] = $x['qst'];
                    } else {
                        $w++;
                        $ket = 'salah';
                        $wrong[] = $x['qst'];
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
            $this->loadModel('Statistic');
            if ($this->Session->read('Exam.start') == '') {
                $this->Util->setFlash(__("Exam session expired."));
                $this->redirect(array('action' => 'view', $id));
            }
            $stat['code'] = $this->Session->read('Exam.start');
            $stat['rquestions'] = implode(' ', $right);
            $stat['wquestions'] = implode(' ', $wrong);
            $stat['user_id'] = $this->UserAuth->getUserId();
            $stat['set_id'] = $id;
            $stat['score'] = count($right);
            $stat['time'] = date("Y-m-d H:i:s");
            $stat['totalscore'] = ($r / ($r + $w)) * 100;
            $this->Statistic->save($stat);
            $this->set('eval', $this->request->data['eval']);
            $this->set('jawaban', true);
            $this->set('right', $r);
            $this->set('wrong', $w);
            $this->set('jumlah', $i);
            $this->Session->delete("Exam.start");
        }
        $this->loadModel("Set");
        if (!$this->Set->exists($id)) {
            throw new NotFoundException(__('Invalid set'));
        }
        $options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
        $set = $this->Set->find('first', $options);
        //get questions
        $questions = $this->Question->find("all", array(
            'conditions' => array("Question.set_id" => $set['Set']['id']),
            'limit' => $set['Set']['questionnumber'],
            'order' => array($this->Util->mapQuestionOrder($set['Set']['question_order_id'])),
            'group' => array('Question.id')
        ));
        if ($this->cekTries() > $set['Set']['tries']) {
            $disable = true;
            $this->Util->setFlash(__('Exam tries has been reached. please contact admin to solve this problem.'));
        }
        $js = array('plugins/lightbox/jquery.lightbox.min', 'demo/gallery', 'plugins/hoverIntent/jquery.hoverIntent.minified');
        $this->set(compact('set', 'disable', 'questions', 'js'));
        $options2 = array('conditions' => array('Statistic.' . $this->Statistic->primaryKey . ' !=' => $id));
        $this->set('other', $this->Statistic->find('all', $options2));
        $this->set('tries', $this->cekTries($this->UserAuth->getUserId(), $id));
    }

    public function result($id = null) {
        $disable = false;
        $this->loadModel('Question');
        $this->loadModel("Set");
        $this->loadModel('Statistic');
        $stat = $this->Statistic->read(null, $id);
        if (!$this->Statistic->exists($id)) {
            throw new NotFoundException(__('Invalid Statistic'));
        }
        $options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
        $set = $this->Set->find('first', $options);
        //get questions
        $questions = $this->Question->find("all", array('conditions' => array("Question.set_id" => $stat['Set']['id']),
            'limit' => $set['Set']['questionnumber'], 'order' => 'Question.id ASC'
        ));
        $this->set(compact('set', 'questions', 'stat'));
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

    private function cekTries($user_id = null, $set_id = null) {
        $this->loadModel("Statistic");
        $j = $this->Statistic->find("count", array('conditions' => array('Statistic.set_id' => $set_id, 'Statistic.user_id' => $user_id)));
        return $j;
    }

}
