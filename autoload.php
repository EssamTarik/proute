<?php
function autoload($classname){
	if(is_readable($classname.".php")){
		include $classname.".php";
	}else{
		die("class $classname not found");
	}
}
spl_autoload_register("autoload");
?>