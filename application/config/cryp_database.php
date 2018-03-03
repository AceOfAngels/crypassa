<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Main database */

$config['db_main'] = (object)array(
	 "host" => 'localhost',
    "port" => '3306',
    "user" => 'crypassa_main',
    "pass" => 'Gh!asjk^hYta!asalk@2323Kl',
    "db_name" => 'crypassa_guest	'
);



$config["c777_MemCache"] = (object)array(
		"host" => '127.0.0.1',
		"port" => '11610',
		"className"=>'Memcached'
);

//// temp connections during migration

?>