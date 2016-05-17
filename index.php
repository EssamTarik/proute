<?php

include "autoload.php";

function main(){
	echo "welcome to proute";
}

function hello(){
	echo "Hello World";
}

Router::addRoute("/hello",hello);

if(isset($_SERVER["PATH_INFO"])&&Router::checkRoute($_SERVER["PATH_INFO"]))
	Router::callRoute($_SERVER["PATH_INFO"]);
else if(!isset($_SERVER["PATH_INFO"]))
	main();
else{
	header('HTTP/1.0 404 Not Found');
	echo "Not Found";
}
?>