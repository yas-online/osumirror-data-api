<?php
App::uses('AppModel', 'Model');
/**
 * Metadatum Model
 *
 * @property map $Map
 */
class Metadata extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'hexide';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Map' => array(
			'className' => 'Map',
			'foreignKey' => 'map',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
