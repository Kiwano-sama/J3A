<?php

	define('DBhost', 'localhost');
	define('DBuser', 'j3a');
	define('DBPass', 'Qwerty123_');
	define('DBname', 'j3a');
	
	try{
		
		$DB_con = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
		
	}catch(PDOException $e){
		
		die($e->getMessage());
	}