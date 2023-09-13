<?php


$dbhost = "localhost";
$dbname = "egypt_db";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


  

function getConnection() {
	global $dbhost;
	global $dbname;
	global $dbpass;
	global $dbuser;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	 if(!$conn)
     {
        die("failed to connect!");
     }


	return $conn;
}




