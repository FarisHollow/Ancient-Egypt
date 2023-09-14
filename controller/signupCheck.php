<?php 
session_start();

require_once("../model/db.php");
require_once("../model/model.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phnNum'];
		$dob = $_POST['DOB'];
		
		$cPassword = $_POST['cPassword'];

	if($password == null || $name == null || $phone == null || $dob == null || $gender == null || $email == null){
		echo "Please Fill Up All The Forms";
	}elseif ($password != $cPassword) {
		echo "Password Doesn't Match";
	}
   
	elseif(!empty($email) && !empty($password) ){
		$query = "insert into admin (name,password, email, phone, dob, gender ) values ('$name','$password', '$email', '$phone', '$dob', '$gender')";
        $status = signup($name,$password, $email, $phone, $dob, $gender);

		if($status){
			$_SESSION['status'] = true;
            setcookie('status', 'true', time()+3600, '/');
			sleep( 2 );
			header("Location: ../view/login.php");


		}
		else 
		{
			echo "Something went wrong!";

		}	
				
		
	}
	else 
		{
			echo "Enter Valid Info!";

		}	
	
		}
?>