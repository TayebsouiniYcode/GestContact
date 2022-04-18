<?php
    $cssLink = "./assets/css/style.css";
    $indexLink = "./index.php";
    $loginLink = "./view/account/login.php";
    $loginName = "Login";
    include_once "./view/components/header.php";

    session_start();
    if (isset($_SESSION['id'])){
        header("Location: ./view/account/profil.php");
    }
?>

<main class="d-lg-flex flex-row-reverse mt-5 pt-xl-5 gap-5 vh-75 align-items-center">
    <div class="illustration d-flex justify-content-center">
        <img class="lg-illustration" src="./assets/img/illustration/illustration-index.svg" alt="" width="300" height="200">
    </div>
    <div class="content mt-5 mt-lg-0">
        <h1 class="title fw-bold mt-5">
            GestContact, web application pour la gestion des contacts
        </h1>
        <p class="description fs-6 fw-bolder mt-3">
            GestContact est une application web pour la gestion des contacts privée, sécurisée et gratuite.
        </p>
        <div class="button mt-4">
            <a href="./view/account/signup.php" class="btn btn-primary fw-bold">JOIN US</a>
        </div>
    </div>
</main>

<?php include_once "./view/components/footer.php";?>