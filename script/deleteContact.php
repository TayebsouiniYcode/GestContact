<?php 

require "../class/Contact.php";
session_start();

if(isset($_POST['Confirm']) && $_POST['password'] == $_SESSION['password']){
    try {
        $c = new Contact($_POST['id'], null, null,null,null, null);
        $c->deleteContact();
        header("Location: ../view/account/contacts.php?msg=1");
    } catch (PDOException $e){
        header("Location: ../view/account/contacts.php?msg=0");
    }
}
