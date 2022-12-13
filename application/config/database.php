<?php
defined('BASEPATH') or exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;

// koneksi database 
$db['default'] = array(
	
	// membuat suatu dsn
	'dsn'	=> '',

	// membuat suatu conekan	
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'bimbel_db',
	
	/* membuat conekan lain */
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
