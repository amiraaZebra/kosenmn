<?php
App::uses('AppController', 'Controller');


/**
 * Posts Controller
 *
 * @property Post $Post
 */
class PostsController extends AppController {

	

	public $helpers = array(
		'Html',
		'Form',
		'Session',
		'Time',
		'Text'
	);

	public $components = array('Search.Prg','Paginator');
    public $presetVars = true;


	public function search() {
		$this->Post->recursive = 0;
		//$user=App::Model('User');
		$this->loadModel('User', 2);
		$this->set('userlists', $this->User->find('list',array('fields'=>array('User.username'))));
		
		$this->set('posts', $this->paginate());
	}


	public function find() {
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Post->parseCriteria($this->Prg->parsedParams());
		$this->set('posts', $this->Paginator->paginate());
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->recursive = 0;
		//$user=App::Model('User');
		$this->loadModel('User', 2);
		$this->set('userlists', $this->User->find('list',array('fields'=>array('User.username'))));
		
		$this->set('posts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		
		if ($this->request->is('post')) {
			$this->Post->create();
			
			$userId = $this->Auth->user('id');
			$this->request->data['Post']['user_id']=$userId;
			
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		
			
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('Post deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
		public function beforeFilter() {
		parent::beforeFilter();

		$this->set('model', $this->modelClass);
		//$this->Auth->allow('index');		
	}	
	
	public function isAuthorized($user = null) {
		/*
		echo 'isAuthorized function worked';
//		return parent::isAuthorized($user);
//		debug($user);
		if($user['role'] === 'admin'){
			return true;
		}
		return false;		
		*/
		return true;
	}
}
