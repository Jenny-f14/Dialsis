<?php
	class Db
	{
    private static $instance = NULL;
    private static $server = "den1.mysql5.gear.host";
    private static $username = "dialisis";
    private static $pass = "Kq6CkEG-5E1!";
    private static $database = "dialisis";
		
		private function __construct(){}

		private function __clone(){}
		
		public static function getConnect(){
			if (!isset(self::$instance)) {
				self::$instance = new mysqli(self::$server, self::$username, self::$pass, self::$database);
			}
			return self::$instance;
		}
	}
?>