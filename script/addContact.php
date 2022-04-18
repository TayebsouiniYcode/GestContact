<?php 

require "../class/Contact.php";

    session_start();

    if(isset($_POST['confirm'])){
    $messages = Array();
    
    // $usernameRegex = "/^[a-z0-9_-]{3,15}$/";
    // $passwordRegex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/";
    // $resultUsername  = preg_match($usernameRegex, $_POST['username']);
    // $resultPassword = preg_match($passwordRegex, $_POST['password']);
    
    // if (!$passwordRegex){
    //     $messages[] = "username must be between 3 and 15 characters";
    // } else if (!$passwordRegex) {
    //     $messages[] = "the password must contain characters, symbols and numbers MIN 8 Char";
    // } else if (!($_POST['password'] == $_POST['passwordVerify'])) {
    //     $messages[] = "passwords is not similar";
    // }

    if (empty($messages[0])){
        $c = new Contact (null, $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address'], $_SESSION['id']);
        $c->setId($c->addContact());
        // $_SESSION['user'] = clone $user;
        // $_SESSION['username'] = $user->getUsername();
        // $_SESSION['password'] = $user->getPassword();
        // $_SESSION['signUpDate'] = new DateTime();
        // $_SESSION['lastLoginDate'] = new DateTime();
        // // $_SESSION['user'] = serialize($user);
    } else {
        //var_dump($messages);
    }

    header("Location: ../view/account/contacts.php");
}