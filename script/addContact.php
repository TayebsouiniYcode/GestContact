<?php 

require "../class/Contact.php";
session_start();

if(isset($_POST['confirm'])){
    try {
        $c = new Contact (null, $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address'], $_SESSION['id']);
        $c->setId($c->addContact());
        header("Location: ../view/account/contacts.php");
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}