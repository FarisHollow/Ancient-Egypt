<?php
require_once '../model/db.php';

$errors = [];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $summary = $_POST['summary'];
  $description = $_POST['description'];
  $dob = $_POST['dob'];
  $dod = $_POST['dod'];
  $rule_time = $_POST['rule_time'];

  if ($_FILES["pic"]["error"] == 4 || $name == "" || $description == "" || $dob == "" || $dod == "" || $rule_time == "" || $summary == "") {
    echo "Enter all the required information.";
  } else {
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
    } else if (preg_match('/[#@!$&*]/', $name)) {
      echo "Name can not contain special characters";
    } else {
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, '../asset/uploads/' . $newImageName);

      // Use prepared statement to insert data
      $query = "INSERT INTO pharaohs (name, summary, description, dob, dod, rule_time, pic) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = mysqli_prepare($conn, $query);

      // Bind parameters
      mysqli_stmt_bind_param($stmt, "sssssss", $name, $summary, $description, $dob, $dod, $rule_time, $newImageName);

      if (mysqli_stmt_execute($stmt)) {
        echo "Data inserted successfully.";
        header("Location: ../view/main.html");
      } else {
        echo "Error: " . mysqli_error($conn);
      }

      // Close the statement
      mysqli_stmt_close($stmt);
    }
  }
}

mysqli_close($conn);
?>
