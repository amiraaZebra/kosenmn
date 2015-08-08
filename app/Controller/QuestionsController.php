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
		if($this->Session->read('Auth.User')){
    	$this->redirect(array(
    	    		'plugin'=>'users', 
    	    		'controller'=>'users', 
    	    		'action' => 'dashboard'
    	    		));
    	}else{
			$sent=false;
			if ($this->request->is('post')) {
	//			$this->request->data['Question']['ip_address']=$this->request->clientIp();
				$this->Question->create();
				if ($this->Question->save($this->request->data)) {
					$sent=true;
					$this->Session->setFlash(__('Таны санал хүсэлт илгээгдлээ. Таньд баярлалаа.'));
					//return $this->redirect(array('action' => 'index'));
				} else {
					$sent=false;
					$this->Session->setFlash(__('Уучлаарай илгээхэд алдаа үүсэв. Дахин оролдоно уу.'));
				}
			}
			$this->set('sent', $sent);
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
		$this->Question->id = $id;
		if (!$this->Question->exists()) {
			throw new NotFoundException(__('Invalid question'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Question->delete()) {
			$this->Session->setFlash(__('The question has been deleted.'));
		} else {
			$this->Session->setFlash(__('The question could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');		
	}	
	
	public function isAuthorized($user = null) {
		return true;
	}
}
