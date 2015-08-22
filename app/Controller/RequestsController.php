<?php
App::uses('AppController', 'Controller');

class RequestsController extends AppController {

	public $components = array('RequestHandler');
	public $uses = array(
        'User',
        'Post',
        'Kakomon',
        'Photo',
        'Question',
        'Graphdata'
    );
	
	public function index($model=null) {
		$vars=explode('&',$model);
		//print_r($vars);
		if(count($vars)>=1){
			switch($vars[0]){
				case 'user':
					$Requests=$this->User->find('all',array('conditions'=>array('User.active'=>true), 'fields' => array('username', 'email', 'role', 'first_name', 'last_name', 'gender', 'status', 'major', 'kosen_kanji', 'kosen_roman', 'kosen_year', 'fb_acc', 'high_school', 'university1', 'university2', 'university3', 'country', 'city', 'profile_image', 'work1', 'work2', 'work3')));	
					
					break;
				case 'post':
					$Requests=$this->Post->find('all',array('fields'=>array('Post.*')));
					break;
				case 'kakomon':
					$Requests=$this->Kakomon->find('all',array('fields'=>array('Kakomon.*')));
					break;
				case 'photo':
					$Requests=$this->Photo->find('all',array('fields'=>array('Photo.*')));
					break;
				case 'question':
					$Requests=$this->Question->find('all',array('fields'=>array('Question.*')));
					break;
				case 'graphdata':
					$Requests=$this->Graphdata->find('all',array('fields'=>array('GraphData.*')));
					break;
				default:
					$Requests='modeliin ner aldaatai bn';
			}	
		}else{
			$Requests='parametr dutuu bn';
		}
		
        $this->set(array(
            'Results' => $Requests,
            '_serialize' => array('Results')
        ));
    }

	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('add');		
		if ( $this->request->is('options') ) {
            $this->_set_json( 'OK' );
        }
        $this->response->header('Access-Control-Allow-Origin: *');
        $this->response->header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
        $this->response->header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	}	
	
	public function isAuthorized($user = null) {
		return true;
	}

}
