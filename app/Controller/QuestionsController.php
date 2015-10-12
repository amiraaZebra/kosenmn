<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
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
	public $uses = array(
        'Question',
		'User',
    );

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
					/*end admin account ruu mail yavuulna
					** local host deer aldaa garah bolhoor tur comment bolgov
					** server tavihdaa uncomment bolgono
					*/
/*					$Email = new CakeEmail('info');
					$Email->from(array('info@kosenclub.sakura.ne.jp' => 'KosenClub Info'));
					$admins = $this->User->find('all', array(
						'conditions' => array('User.role' => 'admin')
					));
					foreach ($admins as $admin){
						$Email->to($admin['User']['email']);
						$Email->subject("KosenClub-d " . $this->request->data['Question']['name'] . "-s asuult irlee");
						$message="\tAguulga:\nner : ".$this->request->data['Question']['name']."\n".
							"message : ".$this->request->data['Question']['text']."\n".
							"holboor barih mail hayag : ".$this->request->data['Question']['email'];
						$Email->send($message);
*/
					}
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
