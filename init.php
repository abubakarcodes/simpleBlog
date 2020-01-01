<?php 
spl_autoload_register(function($class_name){
	require_once"config/config.php"; 
	require_once"libraries/$class_name.php";
	require_once"helpers/format_helper.php";
});


 ?>