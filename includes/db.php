<?php

error_reporting(0);
ini_set('display_errors', '0');

// Connection Database

$dbuser="root";		 		//user to access your database
$dbpassword="dragdrop"; 			//password to access your database
$dbname="dbmoney"; 	//name of database
$dbhost="35.198.230.234";		//your database server

//Connect
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if (mysqli_connect_errno()) {
	printf("MySQLi connection failed: ", mysqli_connect_error());
	exit();
}

// Change character set to utf8
if (!$mysqli->set_charset('utf8')) {
	printf('Error loading character set utf8: %s\n', $mysqli->error);
}

?>
