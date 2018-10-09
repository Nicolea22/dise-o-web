<?php

class Connection 	
{

	private static $connection;

	public static function open()
	{
		if(!isset(self::$connection))
		{
			try
			{
				include_once 'config.inc.php';
	
				self::$connection = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $user, $password);
				self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$connection->exec("SET CHARACTER SET utf8");
				print "Conexion abierta<br>";
			}catch(PDOException $ex){
				print "ERROR: " . $ex->getMessage() . "<br>" ;
				die();
			}
		}

	}

	public static function close()
	{
		if(isset(self::$connection))
		{
			self::$connection = null;
		}
		print "Conexion cerrada";
	}

	public static function get_connection()
	{
		return self::$connection;
	}

}

