<?php
spl_autoload_register(function($classname){
  
	require $filename = "../app/models/".$classname.".php";
});

require 'config.php';
require 'functions.php';
require 'database.php';
require 'model.php';
require 'controller.php';

require 'apps.php';  
?>
