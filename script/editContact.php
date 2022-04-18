<?php 
require "../class/Contact.php";

session_start();
    if(isset($_POST['save'])){
        // $db->update('user',['Username'=>"Khalid",'Password'=>"2423532"],"id=1");
            $c = new Contact ($_POST['id'], $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address'], $_SESSION['id']);
            $c->updateContact();
            header("Location: ../view/account/contacts.php");
        }
    
        