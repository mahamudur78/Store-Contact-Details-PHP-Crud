<?php
//error_reporting(0);
$servername 	= "localhost";
$username 		= "root";
$password 		= "";
$databaseName 	= "crud1";
$db = "";
// Create connection
try{
	$db = mysqli_connect($servername, $username, $password, $databaseName);
	if(!$db){
		throw new Exception("<h2>Failed to Connect Database, Please check Database info.<br>");
	}
}catch (Exception $e) {
	die($e->getMessage(). mysqli_connect_error() . "</h2>");
}

?>