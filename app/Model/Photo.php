<?php
App::uses('AppModel', 'Model');
/**
 * Photo Model
 *
 * @property User $User
 */
class Photo extends AppModel {

 	public $actsAs = array(
	'Uploader.Attachment' => array(
		// Do not copy all these settings, it's merely an example
		'pic' => array(
			
			'append' => '',
			'prepend' => '',
			'tempDir' => TMP,
			'uploadDir' => 'img/photo_img/full',
			'transportDir' => '',
			'finalPath' => '',
			'dbColumn' => 'dir',
			'metaColumns' => array(
				'basename'=>'name'
			),
			'defaultPath' => '',
			'overwrite' => false,
			'stopSave' => true,
			'allowEmpty' => true,
			'transforms' => array(
				'picSmall' => array(
					'class' => 'crop',
					'nameCallback' => 'transformNameCallback',
					'append' => false,
					'overwrite' => true,
					'self' => false,
					'width' => 100,
					'height' => 100,
					'uploadDir' => 'img/photo_img/thumb'
				)
			)
		)
	),
	
	'Uploader.FileValidation' => array(
		'pic' => array(
			
			'maxWidth' => array('value' => 2000),
			
			'maxHeight' => array('value' => 2000, 'error' => 'File is too big', ),
			'extension' => array('gif', 'jpg', 'png', 'jpeg'),
			'type' => 'image',
			'filesize' => 5242880,
			
		)
	)
	);
	
	public function transformNameCallback($name, $file) {
    	return $this->getUploadedFile()->name();
	}
	
	public function beforeUpload($options){
    	$folder = $this->data['Photo']['album'];
    	
    	$options['uploadDir'] = 'img/photo_img/' . $folder."/full";
		$options['transforms']['picSmall']['uploadDir'] = 'img/photo_img/' . $folder."/thumb";
		$options['transforms']['picSmall']['metaColumns']['basename']=$options['metaColumns']['basename'];
    	return $options;
	}
	
	public $validate = array(
		'album' => array(
    	    'rule1' => array(
        	    'rule' => array('hasAlbum'),
            	//'required' => true,
            	'allowEmpty' => 'null',
            	'message' => 'Album name is required.'
        	)
    	),
    	
		'pic' => array(
			'rule' => 'notEmpty'
		)
		
	);
	
	function hasAlbum($field){
		
    	if(!empty($this->data[$this->name]['album']) ){
    	    return true;
    	} else {
        	return false;
    	}
	}
	


	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
