<?php 

/**
 * 
 */
class Database
{
	static $bdd;

	public static function connect($host, $dbname, $user, $pass){
		self::$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8", $user, $pass);
	}

	public static function disconnect(){
		self::$bdd = null;
	}

	
}