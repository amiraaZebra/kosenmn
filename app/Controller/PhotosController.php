<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 * @property Photo $Photo
 */
class PhotosController extends AppController {
	
	public $helpers = array('Html', 'Form');
	var $uses=array('User','Photo');
	public function profilephoto(){
		if ($this->request->is('post')) {
			$filename = "img/profile/";
			//6400x4800 max size
			if($this->data['Photo']['file']['size']>30720000){
				$this->Session->setFlash(__('Зурагний хэмжээ хэтэрхий том байна.'));
				return $this->redirect(array('controller'=>'users', 'action' => 'edit', $this->Auth->user('id')));
			}
			if(!($this->data['Photo']['file']['type']=='image/jpeg' || $this->data['Photo']['file']['type']=='image/jpg' || $this->data['Photo']['file']['type']=='image/png')){
				$this->Session->setFlash(__('Зөвхөн зураг сонгоно уу.'));
				return $this->redirect(array('controller'=>'users', 'action' => 'edit', $this->Auth->user('id')));
			}
			$imageType=split('/', $this->data['Photo']['file']['type']);			
			//if (move_uploaded_file($this->data['Photo']['file']['tmp_name'],$filename.'profilePhoto_'.$this->Auth->User('username').".".$imageType[1])) {
			if (move_uploaded_file($this->data['Photo']['file']['tmp_name'],$filename.'profilePhoto_'.$this->Auth->User('id').".".$imageType[1])) {
				$this->Session->setFlash('Success');
			} else {
				$this->Session->setFlash('There was a problem uploading file. Please try again.');
				return $this->redirect(array('controller'=>'users', 'action' => 'edit', $this->Auth->user('id')));
			}        	
			$this->Photo->create();
			$this->request->data['Photo']['user_id']=$this->Auth->user('id');
			$this->request->data['Photo']['title']='profilePhoto_'.$this->Auth->User('id').".".$imageType[1];
			if ($this->Photo->save($this->request->data)) {
				
				$thisUser = $this->User->find('first', array('conditions' => array('User.id'=> $this->Session->read('Auth.User.id'))));			
				//echo var_dump($this->Session->read('Auth.User.id'));
				//echo var_dump($thisUser);
				$thisUser['User']['profile_image'] = 'profilePhoto_'.$this->Auth->User('id').".".$imageType[1];
				$this->User->save($thisUser);
				$this->Session->write('Auth.User.profile_image','profilePhoto_'.$this->Auth->User('id').".".$imageType[1]);
				return $this->redirect(array('controller'=>'users', 'action' => 'edit', $this->Auth->user('id')));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.'));
			}
		}
	}	 
			
	
	
/**
 * index method
 *
 * @return void
 */  
  
	public function index() {
		$this->set('allAlbum' , $this->Photo->find('list',array(
			'fields' => array('Photo.album', 'Photo.album'),
			'group' => 'Photo.album')));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($albumName = null) {
		/*if (!$this->Photo->exists($id)) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
		$this->set('photo', $this->Photo->find('first', $options));*/
		$this->set('albumName',$albumName);
		//$this->set('thumbdir','/kosen/app/webroot/images/thumb');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		if ($this->request->is('post')) {
			//$this->Photo->create();
			/*if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('The photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.'));
			}*/
		}
		//$users = $this->Photo->User->find('list');
		//$this->set(compact('users'));
		
		//$data=$this->request->data;
		
		$this->set('album_options', $this->Photo->find('list',array(
			'fields' => array('Photo.album', 'Photo.album'),
			'group' => 'Photo.album')));
		
		if(!empty($this->data)){
		
		foreach ($this->request->data as $data1) {
    		//pr($data1);
			if (empty($data1['name'])){
				if (!empty($data1['album_select'])) {
					$album=$data1['album_select'];
				}
				else if(!empty($data1['album'])){
					$album=$data1['album'];
				}
					else $album='';
				continue;
			}
			
			$data['Photo']['pic']=$data1;
			//pr($data);
		
			
			$userId = $this->Auth->user('id');
			$data['Photo']['user_id']=$userId;
			
			/*if (!empty($data['Photo']['photo_select'])) {
				$data['Photo']['album']=$data['Photo']['album_select'];
			}
			*/
			 $data['Photo']['album']=$album;
					
			/*if (!empty($data['Kakomon']['university_select'])) {
				$filename=$data['Kakomon']['university_select'];
				$data['Kakomon']['university']=$data['Kakomon']['university_select'];
			}
			else if (!empty($data['Kakomon']['university'])) {
					$filename=$data['Kakomon']['university'];
				}
			*/
					
			/*$ext = pathinfo($data['Kakomon']['file']['name'], PATHINFO_EXTENSION);
			$data['Kakomon']['file']['name']=$filename.'.'.$ext;
		*/
			if ($this->Photo->save($data, true)) {
				// Do something
				$this->Session->setFlash(__('Photo Saved'));
				
				$this->redirect(array('action' => 'index'));
			}
			else{
				//pr($this->Form->error('data[]'));
				$this->Session->setFlash(__('Failed'));
			}
		}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Photo->exists($id)) {
			throw new NotFoundException(__('Invalid photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('The photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
			$this->request->data = $this->Photo->find('first', $options);
		}
		$users = $this->Photo->User->find('list');
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
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
//endees Amaraa nemsen

	public function beforeFilter() {
		parent::beforeFilter();

		//$this->set('model', $this->modelClass);
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