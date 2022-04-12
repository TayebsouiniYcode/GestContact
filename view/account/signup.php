<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    include_once "../components/header.php"; 
?>

<main>
    <div class="illustration mt-5 d-flex justify-content-center">
        <img src="../../assets/img/illustration/signup.svg" alt="" width="300" height="200">
    </div>
    <form class="mt-4" action="./profil.php">
        <div class="form-group">
            <label for="username" class="form-label text2 fw-bold">Username</label>
            <label class="ml-auto">Have an account?<a href="./login.php">Login</a> </label>
            <input type="text" name="username" id="username" class="form-control bg-2" placeholder="Username">
        </div>
        <div class="form-group mt-3">
            <label for="password" class="form-label text2 fw-bold">Password</label>
            <input type="password" name="password" id="password" class="form-control bg-2" placeholder="Password">
        </div>
        <div class="form-group mt-3">
            <label for="passwordVerify" class="form-label text2 fw-bold">Password verify</label>
            <input type="password" name="passwordVerify" id="passwordVerify" class="form-control bg-2" placeholder="Password verify">
        </div>
        <div class="form-group mt-4">
            <input class="btn btn-primary w-100 mt-2" type="submit" value="Sign up">
        </div>
    </form>
</main>

<!-- <div class="container w-50 mt-5">
    <h1 class="title">Sign up</h1>
    <form action="">
        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="passwordVerify" class="form-label">Password verify</label>
            <input type="password" name="passwordVerify" id="passwordVerify" class="form-control" placeholder="Password verify">
        </div>
        <div class="form-group">
            <input class="btn btn-primary w-100 mt-2" type="submit" value="Sign up">
        </div>
    </form>
    <p>
        Already have an account? <a href="#">Login</a> here.
    </p>
</div> -->

<?php include_once "../components/footer.php"; ?>