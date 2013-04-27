<?php
/**
 * MapFixture
 *
 */
class MapFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'size' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'key' => 'index'),
		'hash_md5' => array('type' => 'binary', 'null' => false, 'default' => null, 'length' => 16, 'key' => 'index'),
		'hash_sha1' => array('type' => 'binary', 'null' => false, 'default' => null, 'length' => 20),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'hash_md5_hash_sha1' => array('column' => array('hash_md5', 'hash_sha1'), 'unique' => 1),
			'date' => array('column' => 'date', 'unique' => 0),
			'size' => array('column' => 'size', 'unique' => 0),
			'type' => array('column' => 'type', 'unique' => 0),
			'name' => array('column' => 'name', 'type' => 'fulltext')
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'size' => 1,
			'date' => '2013-04-27 20:40:11',
			'hash_md5' => 'Lorem ipsum do',
			'hash_sha1' => 'Lorem ipsum dolor ',
			'indexes' => ''
		),
	);

}
