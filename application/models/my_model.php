<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	
	
	
	protected $MC;
	
	// DON'T COMMENT OUT
	// __get will take care - this is just for consitent info
	/* 
	protected  $db=NULL;
	protected  $db_dev=NULL;
	protected  $db_admin=NULL;
	protected  $db_accounting=NULL;
	protected  $db_cms=NULL;
	protected  $db_inbox=NULL;
	protected $db_nmise;
	*/
	//static vars ensured one link only 
	protected static $_db = NULL;
	
	//

	private $isDevMode = FALSE;
	
	public function __construct()
	{
		$this->MC = new MC_wrapper($this->config->item('cryp_MemCache'));
		
		
	}

	public function __get($dbName)
	{
		if($dbName=='db')
		{
			if(self::$_db!=null)
				return self::$_db;
			$set      = $this->config->item('db_main');
			self::$_db = new PDO("mysql:host=" . $set->host . ";port=" . $set->port . ";dbname=" . $set->db_name, $set->user, $set->pass, array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			));
			return self::$_db;
		}	
		
		//default getter
		$CI =& get_instance();
		return $CI->$dbName;
	}
	
	

	
	public function logErrors($errType,$msg)
	{
		$_bt      = debug_backtrace();
		$glk      = '_c777_errLog_'.date('dmY');
		$arMCkeys = $this->MC->get($glk);
		if ($arMCkeys == false)
			$arMCkeys = array();
		$inf          = (object) array(
			"set_from_file" => $_bt[1]["file"],
			"set_from_function" => $_bt[1]["function"],
			"set_from_line" => $_bt[1]["line"],
			"dt" => time(),
			"msg"=>$msg,
			"type"=>$errType
		);
		$curLogVal= $this->MC->get($glk);
		if($curLogVal==false)
			$curLog= array();
		else
			$curLog= json_decode($curLogVal);
		$curLog[]=$inf;
		$this->MC->set($glk,json_encode($curLog),5*24*60*60);
	}
	
}


?>