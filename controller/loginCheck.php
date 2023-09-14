<?php 

session_start();

require_once("../model/db.php");
require_once("../model/model.php");

$email = $_POST['email'];
$password = $_POST['password'];


	


	if($email == null || $password == null){
		echo "Please fill up the box's";
	}else{

		$status = login($email, $password);
       

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			sleep(2);
            $_SESSION['email'] = $email;

			header('location: ../view/main.php');
		}else{
			echo "Invalid user";
		}
	
		
	}

?>