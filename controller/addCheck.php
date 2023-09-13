<?php
require_once '../model/db.php';

$errors = [];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $dob = $_POST['dob'];
  $dod = $_POST['dod'];
  $rule_time = $_POST['rule_time'];
  // $pic = $_POST['pic']; 
  
  if ($_FILES["pic"]["error"] == 4 || $name == "" || $description == "" || $dob == "" || $dod == "" || $rule_time == "") {
    echo "Enter all the required information.";
  }
   else {
    $fileName = $_FILES["pic"]["name"];
    $fileSize = $_FILES["pic"]["size"];
    $tmpName = $_FILES["pic"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    
    if (!in_array($imageExtension, $validImageExtension)) {
      echo "Invalid Image Extension.";
    } else if ($fileSize > 1000000) {
      echo "Image Size Is Too Large.";
    } else if(preg_match('/[#@!$&*]/', $name)){
      echo "Name can not contain special characters";
    } 
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, '../asset/uploads/' . $newImageName);

      $query = "INSERT INTO pharaohs (name, description, dob, dod, rule_time, pic) VALUES ('$name', '$description', '$dob', '$dod', '$rule_time', '$newImageName')";

      if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully.";
        header("Location: ../view/main.html"); 
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    }
  }
}

mysqli_close($conn);
?>
