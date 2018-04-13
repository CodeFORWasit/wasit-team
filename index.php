<?php 
	session_start();
	
    // Database CONFIG	
	define('DB_TYPE', 'mysql');
	define('DB_HOST', '127.0.0.1');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'c4iraq');

	define('URL', isset($_GET['url']) ? array_shift($_GET) : null);
	
	// Public Path 
	define('DIR',__DIR__);
	

    function __autoload($name) {
       require "libs/".$name .".php";
    }
    
    new Bootstrap();

?>