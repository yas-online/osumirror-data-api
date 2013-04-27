<?php
/**
 * MetadatumFixture
 *
 */
class MetadatumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'map' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'size' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'hash_md5' => array('type' => 'binary', 'null' => false, 'default' => null, 'length' => 16, 'key' => 'index'),
		'hash_sha1' => array('type' => 'binary', 'null' => false, 'default' => null, 'length' => 20),
		'm_title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'm_artist' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'm_creator' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'm_version' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'm_source' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'm_tags' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'd_drain' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'd_size' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'd_diff' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'd_smult' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'd_srate' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'index'),
		'raw' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'hash_md5_hash_sha1' => array('column' => array('hash_md5', 'hash_sha1'), 'unique' => 1),
			'd_drain' => array('column' => 'd_drain', 'unique' => 0),
			'd_size' => array('column' => 'd_size', 'unique' => 0),
			'd_diff' => array('column' => 'd_diff', 'unique' => 0),
			'd_smult' => array('column' => 'd_smult', 'unique' => 0),
			'd_srate' => array('column' => 'd_srate', 'unique' => 0),
			'size' => array('column' => 'size', 'unique' => 0),
			'map' => array('column' => 'map', 'unique' => 0),
			'mtitle' => array('column' => 'm_title', 'type' => 'fulltext'),
			'm_artist' => array('column' => 'm_artist', 'type' => 'fulltext'),
			'm_creator' => array('column' => 'm_creator', 'type' => 'fulltext'),
			'm_version' => array('column' => 'm_version', 'type' => 'fulltext'),
			'm_source' => array('column' => 'm_source', 'type' => 'fulltext'),
			'm_tags' => array('column' => 'm_tags', 'type' => 'fulltext'),
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
			'map' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'size' => 1,
			'hash_md5' => 'Lorem ipsum do',
			'hash_sha1' => 'Lorem ipsum dolor ',
			'm_title' => 'Lorem ipsum dolor sit amet',
			'm_artist' => 'Lorem ipsum dolor sit amet',
			'm_creator' => 'Lorem ipsum dolor sit amet',
			'm_version' => 'Lorem ipsum dolor sit amet',
			'm_source' => 'Lorem ipsum dolor sit amet',
			'm_tags' => 'Lorem ipsum dolor sit amet',
			'd_drain' => 1,
			'd_size' => 1,
			'd_diff' => 1,
			'd_smult' => 1,
			'd_srate' => 1,
			'raw' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
