<?php 
    // require "../class/Database.php";
    require "../class/User.php";
    session_start();

    if(isset($_POST['submit'])){
        
        $user = new User(null, $_POST['username'], $_POST['password'], null);
        $user = clone $user->login($user->getUsername(), $user->getPassword());
        
        if ($user->getId() == -1) {
            header("Location: ../view/account/login.php?msg=incorrect");
        } else if ($user->getId() == 0) {
            header("Location: ../view/account/login.php?msg=inexist");
        } else  {
            $_SESSION['id'] = $user->getId();
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['password'] = $user->getPassword();
            $_SESSION['signupDate'] = $user->getSignUpDate();
            $_SESSION['lastLoginDate'] = new DateTime();

            header("Location: ../view/account/profil.php");
        }
    }