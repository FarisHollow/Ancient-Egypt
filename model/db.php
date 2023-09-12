<?php


$dbhost = "localhost";
$dbname = "egypt_db";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

function getConnection(){
	global $dbhost;
	global $dbname;
	global $dbpass;
	global $dbuser;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	


	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

	return $conn;

	

}




