<?php
$cssLink = "../../assets/css/style.css";
$indexLink = "../../index.php";
$loginLink = "./Signup.php";
$loginName = "Signup";
include_once "../components/header.php";
session_start();
if (isset($_SESSION['id'])){
    header("Location: ./profil.php");
}

?>

<main class="d-lg-flex flex-row-reverse mt-5 mt-lg-0 pt-xl-5 gap-5 vh-75 align-items-center">
    <div class="illustration mt-5 mt-lg-0 d-flex justify-content-center">
        <img class="lg-illustration" src="../../assets/img/illustration/login.svg" alt="" width="300" height="200">
    </div>
    <form class="mt-4 mt-lg-0 w-100" action="../../script/login.php" method="POST" name="login">
        <div class="form-group">
            <?php if (isset($_GET['msg'])) {
                if ($_GET['msg'] == "incorrect") {
                    echo '<div class="alert alert-danger" role="alert">'
                        . " Password invalid"
                        . '</div>';
                } else if ($_GET['msg'] == "inexist") {
                    echo '<div class="alert alert-warning" role="alert">'
                        . 'Account inexist'
                        . '</div>';
                }
            } ?>
        </div>
        <div class="form-group">
            <label for="username" class="form-label text2 fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control lg-input modalInput" placeholder="Username">
        </div>
        <div class="form-group mt-3">
            <label for="password" class="form-label text2 fw-bold">Password</label>
            <input type="password" name="password" id="password" class="form-control lg-input modalInput" placeholder="Password">
        </div>
        <div class="form-group mt-4">
            <input class="btn btn-primary w-100 mt-2" type="submit" value="Login" name="submit">
        </div>
        <div class="form-group mt-4 text-center">
            <p>
                <a href="#" class="link-secondary nav-link">Forgot password?</a>
            </p>
        </div>
    </form>
</main>

<?php include_once "../components/footer.php"; ?>