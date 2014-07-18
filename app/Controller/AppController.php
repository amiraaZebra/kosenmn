<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
//start

	public $helpers = array(
		'Html',
		'Form',
		'Session'
	);
	
	public $components = array(
		'DebugKit.Toolbar', 
		'RequestHandler', 
		'Session', 
		'Auth' => array('authorize' => 'Controller'),
		'Cookie',
		'Security'
	);  
  
    
  	public function restoreLoginFromCookie() {  
    	$this->Cookie->name = 'Users';  
    	$cookie = $this->Cookie->read('rememberMe');  
	      
	    if (!empty($cookie) && !$this->Auth->user()) {  
	        $data['User'][$this->Auth->fields['username']] = $cookie[$this->Auth->fields['username']];  
	        $data['User'][$this->Auth->fields['password']] = $cookie[$this->Auth->fields['password']];  
	        $this->Auth->login($data);  
	    }  
  	} 
   
  	function beforeFilter() {  
	    parent::beforeFilter();  
	    $this->Auth->fields = array('username' => 'email', 'password' => 'passwd');  
	    $this->Auth->loginAction = array('plugin' => 'users', 'controller' => 'users', 'action' => 'login', 'admin' => false);  
	    $this->Auth->loginRedirect = '/users';  
	    $this->Auth->logoutRedirect = '/users';  
	    $this->Auth->authError = __('Sorry, but you need to login to access this location.', true);  
	    $this->Auth->loginError = __('Invalid e-mail / password combination.  Please try again', true);  
	    $this->Auth->autoRedirect = false;  
	    $this->Auth->userModel = 'Users.User';  
	    $this->Auth->userScope = array('User.active' => 1);  
	    $this->restoreLoginFromCookie();   
	  
	//  $this->layout="default_login_after"; //レイアウトの指定  
	    //The request has been black-holed 対策  
	    $this->Security->validatePost = false;  
	  
	    //ログイン状態によりレイアウト変更  
	    if ($this->Auth->user()) {  
	        $this->layout = 'default_login_after_ver02';  
        } else {  
            $this->layout = 'default';  
        }  
	}	





//end	
	
	
}
