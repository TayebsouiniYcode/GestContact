<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    $loginLink = "./login.php";
    $loginName = "Login";
    $script = "../../assets/js/validation.js";
    include_once "../components/header.php"; 
?>

<main class="d-lg-flex flex-row-reverse mt-5 mt-lg-0 pt-xl-5 gap-5 vh-75 align-items-center">
    <div class="illustration mt-5 mt-lg-0 d-flex justify-content-center">
        <img class="lg-illustration" src="../../assets/img/illustration/signup.svg" alt="" width="300" height="200">
    </div>
    <form class="mt-4 mt-lg-0 w-100" method="POST" action="../../script/signup.php" name="signup" onsubmit="return signupVerify()" >
        <div class="form-group">
            <label for="username" class="form-label text2 fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control lg-input modalInput" placeholder="Username">
            <span class="text-danger" id="signupUsernameMsg"></span>
        </div>
        <div class="form-group mt-3">
            <label for="password" class="form-label text2 fw-bold">Password</label>
            <input type="password" name="password" id="password" class="form-control lg-input modalInput" placeholder="Password">
            <span class="text-danger" id="signupPasswordMsg"></span>
        </div>
        <div class="form-group mt-3">
            <label for="passwordVerify" class="form-label text2 fw-bold">Password verify</label>
            <input type="password" name="passwordVerify" id="passwordVerify" class="form-control lg-input modalInput" placeholder="Password verify">
            <span class="text-danger" id="signupPasswordVerifyMsg"></span>
        </div>
        <div class="form-group mt-4">
            <input class="btn btn-primary w-100 mt-2" type="submit" name="submit" value="Sign up">
        </div>
    </form>
</main>
<?php include_once "../components/footer.php"; ?>