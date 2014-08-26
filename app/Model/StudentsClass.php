<?php
App::uses('AppModel', 'Model');
/**
 * StudentsClass Model
 *
 * @property Teachers $Teachers
 * @property Students $Students
 */
class StudentsClass extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'teachers_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'students_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Teachers' => array(
			'className' => 'Teachers',
			'foreignKey' => 'teachers_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Students' => array(
			'className' => 'Students',
			'foreignKey' => 'students_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
