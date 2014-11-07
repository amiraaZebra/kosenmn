<?php
App::uses('AppModel', 'Model');
/**
 * Kakomon Model
 *
 * @property User $User
 */
class Kakomon extends AppModel {

	public $actsAs = array(
	'Uploader.Attachment' => array(
		// Do not copy all these settings, it's merely an example
		'file' => array(
			'nameCallback' => 'formatName',
			'append' => '',
			'prepend' => '',
			'tempDir' => TMP,
			'uploadDir' => '',
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
			'transforms' => array(),
			'transport' => array(),
			'curl' => array()
		)
	),
	
	'Uploader.FileValidation' => array(
		'file' => array(
						
			'extension' => array('gif', 'jpg', 'png', 'jpeg', 'pdf'),
			'filesize' => 5242880
			
		)
	)
	);
	
	public function formatName($name, $file) {
	
		//return sprintf('%s-%s', $name, $file->size());
		return $name;
	}
	
	public $validate = array(
		'year' => array(
			'rule1' => array(
				'rule' => 'numeric',
				'allowEmpty' => false,
			),
			'rule2' => array(
				'rule' => array('comparison','>',0),
				'message' => 'Please enter a natural number'
			)
		),
		'university' => array(
    	    'rule1' => array(
        	    'rule' => array('hasUniversity'),
            	'allowEmpty' => 'null',
            	'message' => 'University name is required.'
        	),
        	'alpha' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'The university name must be alphanumeric.')
    	),
    	'gakubu' => array(
    	    'rule1' => array(
        	    'rule' => array('hasGakubu'),
            	'allowEmpty' => 'null',
            	'message' => 'Gakubu name is required.'
        	),
        	'alpha' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'The gakubu name must be alphanumeric.'),
    	),
    	'other' => array(
        	'alpha' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'The other comment must be alphanumeric.'),
    	),
    	'file' => array(
    		'rule' => 'notEmpty',
    	)
    	
	);
	
	function hasUniversity($field){
		
    	if(!empty($this->data[$this->name]['university']) ){
    	    return true;
    	} else {
        	return false;
    	}
	}
	function hasGakubu($field){
		
    	if(!empty($this->data[$this->name]['gakubu']) ){
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
