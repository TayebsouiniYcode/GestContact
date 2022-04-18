<?php 

require "../class/Contact.php";

    session_start();

    if(isset($_POST['Confirm']) && $_POST['password'] == $_SESSION['password']){
            $c = new Contact($_POST['id'], null, null,null,null, null);
            $c->deleteContact();
            header("Location: ../view/account/contacts.php?msg=1");
    } else {
        header("Location: ../view/account/contacts.php?msg=0");;
    }
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

    
