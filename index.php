<?php
    $cssLink = "./assets/css/style.css";
    $indexLink = "./index.php";
    include_once "./view/components/header.php";
?>

<main class="">
    <div class="illustration mt-5 d-flex justify-content-center">
        <img src="./assets/img/illustration/illustration-index.svg" alt="" width="300" height="200">
    </div>
    <div class="content mt-5">
        <h1 class="title fw-bold">
            GestContact, web application pour la gestion des contacts
        </h1>
        <p class="description fs-6 fw-bolder mt-3">
            GestContact est une application web pour la gestion des contacts privée, sécurisée et gratuite.
        </p>
        <div class="button mt-4">
            <a href="./view/account/login.php" class="btn btn-primary fw-bold">login</a>
        </div>
    </div>
</main>

<?php include_once "./view/components/footer.php";?>