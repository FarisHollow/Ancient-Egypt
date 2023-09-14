<?php


require_once "db.php";

    function login($email, $password){
        $conn = getConnection();
		$sql = "select * from admin where email='{$email}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }

}

    function signup($name,$password, $email, $phone, $dob, $gender){
        $conn = getConnection();
		$sql = "insert into admin (name,password, email, phone, dob, gender ) values ('$name','$password', '$email', '$phone', '$dob', '$gender')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }




?>
