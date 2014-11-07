<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 * @property Photo $Photo
 */
class PhotosController extends AppController {
	
	public $helpers = array('Html', 'Form');
	

	
	
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



