<?php 

session_start();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['signUpDate']);
// $_SESSION['message']="You are now logged out";
header("location: ../index.php");

?>