<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */
class KakomonsController extends AppController {
	

	public $helpers = array('Html', 'Form');
/**
 * index method
 *
 * @return void
 */
	public function index() {

		if (!empty($this->params['url']['university'])){
			if (!empty($this->params['url']['gakubu'])){
				if (!empty($this->params['url']['year'])){
					$this->Kakomon->recursive = 0;
					$this->set('kakomons', $this->paginate(array(
						'Kakomon.university' => $this->params['url']['university'],
						'Kakomon.gakubu' => $this->params['url']['gakubu'],
						'Kakomon.year' => $this->params['url']['year'])));
						
				}
				else{
					$this->set('year_list', $this->Kakomon->find('list',array(
						'fields' => array('Kakomon.year'),
						'conditions' => array(
							'Kakomon.university' => $this->params['url']['university'],
							'Kakomon.gakubu' => $this->params['url']['gakubu']),
						'group' => 'Kakomon.year')));
				}
			}
			else{
				
				$this->set('gakubu_list', $this->Kakomon->find('list',array(
					'fields' => array('Kakomon.gakubu'),
					'conditions' => array('Kakomon.university' => $this->params['url']['university']),
					'group' => 'Kakomon.gakubu')));
			}
		}
		else{
			$this->set('university_list', $this->Kakomon->find('list',array(
				'fields' => array('Kakomon.university'),
				'group' => 'Kakomon.university')));
		}
	}

	public function index_admin() {

		if (!empty($this->params['url']['university'])){
			if (!empty($this->params['url']['gakubu'])){
				if (!empty($this->params['url']['year'])){
					$this->Kakomon->recursive = 0;
					$this->set('kakomons', $this->paginate(array(
						'Kakomon.university' => $this->params['url']['university'],
						'Kakomon.gakubu' => $this->params['url']['gakubu'],
						'Kakomon.year' => $this->params['url']['year'])));
						
				}
				else{
					$this->set('year_list', $this->Kakomon->find('list',array(
						'fields' => array('Kakomon.year'),
						'conditions' => array(
							'Kakomon.university' => $this->params['url']['university'],
							'Kakomon.gakubu' => $this->params['url']['gakubu']),
						'group' => 'Kakomon.year')));
				}
			}
			else{
				
				$this->set('gakubu_list', $this->Kakomon->find('list',array(
					'fields' => array('Kakomon.gakubu'),
					'conditions' => array('Kakomon.university' => $this->params['url']['university']),
					'group' => 'Kakomon.gakubu')));
			}
		}
		else{
			$this->set('university_list', $this->Kakomon->find('list',array(
				'fields' => array('Kakomon.university'),
				'group' => 'Kakomon.university')));
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Kakomon->id = $id;
		if (!$this->Kakomon->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $this->Kakomon->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		
		
		$data=$this->request->data;
		
		$this->set('university_options', $this->Kakomon->find('list',array(
			'fields' => array('Kakomon.university', 'Kakomon.university'),
			'group' => 'Kakomon.university')));
			
		$this->set('gakubu_options', $this->Kakomon->find('list',array(
			'fields' => array('Kakomon.gakubu', 'Kakomon.gakubu'),
			'group' => 'Kakomon.gakubu')));
		
		if(!empty($this->data)){
			
			$userId = $this->Auth->user('id');
			$data['Kakomon']['user_id']=$userId;
			
			$filename='';
			
			if (!empty($data['Kakomon']['university_select'])) {
				$filename=$data['Kakomon']['university_select'];
				$data['Kakomon']['university']=$data['Kakomon']['university_select'];
			}
			else if (!empty($data['Kakomon']['university'])) {
					$filename=$data['Kakomon']['university'];
				}
			if (!empty($data['Kakomon']['gakubu_select'])) {
				$filename=$filename.'_'.$data['Kakomon']['gakubu_select'];
				$data['Kakomon']['gakubu']=$data['Kakomon']['gakubu_select'];
			}
			else if (!empty($data['Kakomon']['gakubu'])) {
					$filename=$filename.'_'.$data['Kakomon']['gakubu'];
				}
			if (!empty($data['Kakomon']['year'])) {
				$filename=$filename.'_H'.$data['Kakomon']['year'];
			}
			if (!empty($data['Kakomon']['other'])) {
				$filename=$filename.'_'.$data['Kakomon']['other'];
			}
			
			$ext = pathinfo($data['Kakomon']['file']['name'], PATHINFO_EXTENSION);
			$data['Kakomon']['file']['name']=$filename.'.'.$ext;
		
			if ($this->Kakomon->save($data, true)) {
				// Do something
				$this->Session->setFlash(__('Kakomon Saved'));
				//$this->redirect(array('action' => 'index'));
			}
			else{
				$this->Session->setFlash(__('Failed'));
			}
		}
		
		//pr($data);
	}
	
/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		/*if (!$this->request->is('kakomon')) {
			throw new MethodNotAllowedException();
		}*/
		$this->Kakomon->id = $id;
		if (!$this->Kakomon->exists()) {
			throw new NotFoundException(__('Invalid Kakomon'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Kakomon->delete()) {
			$this->Session->setFlash(__('Kakomon deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Kakomon was not deleted'));
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
