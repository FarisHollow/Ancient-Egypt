<?php
require_once '../model/db.php';

$errors = [];

if (isset($_POST["submit"])) {
  $comment = $_POST['comment'];
  $pharaohId = $_POST['pharaoh_id'];
  
  if ($comment == "" || $pharaohId == "") {
        echo "Add a comment first";
  }
   else {

      $query = "INSERT INTO comment ( comment, pharaoh_id) VALUES ('$comment', '$pharaohId')";

      if (mysqli_query($conn, $query)) {
        echo "Comment added successfully";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    }
  }


mysqli_close($conn);
?>
