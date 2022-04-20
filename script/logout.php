<?php 
session_start();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['signUpDate']);

header("location: ../index.php");
?>