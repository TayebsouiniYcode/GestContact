<?php 
require "../class/User.php";
session_start();

if(isset($_POST['submit'])){
    $messages = Array();

    $usernameRegex = "/^[a-z0-9_-]{3,15}$/";
    $passwordRegex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/";
    $resultUsername  = preg_match($usernameRegex, $_POST['username']);
    $resultPassword = preg_match($passwordRegex, $_POST['password']);

    if (!$passwordRegex){
        $messages[] = "username must be between 3 and 15 characters";
    } else if (!$passwordRegex) {
        $messages[] = "the password must contain characters, symbols and numbers MIN 8 Char";
    } else if (!($_POST['password'] == $_POST['passwordVerify'])) {
        $messages[] = "passwords is not similar";
    }

    if (empty($messages[0])){
        $user = new User(null, $_POST['username'], $_POST['password'], null);
        $user->signUp($_POST['username'], $_POST['password']);
        header("Location: ../view/account/login.php");
    } else {
        var_dump($messages);
    }
}