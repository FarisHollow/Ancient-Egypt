<?php

session_start();

session_destroy();
setcookie('status', 'true', time()-100, '/');


header("Location: ../view/login.php");
die;
?>