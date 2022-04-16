<?php 
    // require "../class/Database.php";
    require "../class/User.php";

    session_start();

    if(isset($_POST['submit'])){
        
        $user = new User(null, $_POST['username'], $_POST['password'], null);
        $user = clone $user->login($user->getUsername(), $user->getPassword());
        var_dump($user);

        if ($user->getId() == -1) {
            echo "error";
        } else {
            $_SESSION['id'] = $user->getId();
            $_SESSION['username'] = $user->getUsername();
            $_SESSION['password'] = $user->getPassword();
            $_SESSION['signupDate'] = $user->getSignUpDate();
            $_SESSION['lastLoginDate'] = $user->getLastLoginDate();

            header("Location: ../view/account/profil.php");
        }
    }