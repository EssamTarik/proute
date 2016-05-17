<?php
class Router{
	private static $routes=array();
	public static function addRoute($addr,$callback){
		self::$routes[$addr]=$callback;
	}
	public static function callRoute($addr){
		$callback=self::$routes[$addr];
		$callback();
	}
	public static function checkRoute($addr){
		if(isset(self::$routes[$addr]))
			return true;
		return false;
	}
};
?>