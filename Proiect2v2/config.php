<?php
    //set off all error for security purposes
	error_reporting(E_ALL);
	
    define("DB_DSN", "mysql:host=localhost;dbname=tw");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
	define("CLS_PATH", "Clase");

	include_once(CLS_PATH . "/user.php");
?>