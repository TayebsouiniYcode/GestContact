<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    include_once "../components/header.php"; 
?>

<main>
    <div class="illustration mt-5 d-flex justify-content-center">
        <img src="../../assets/img/illustration/login.svg" alt="" width="300" height="200">
    </div>
    <form class="mt-4" action="">
        <div class="form-group">
            <label for="username" class="form-label text2 fw-bold">Username</label>
            <label class="ml-auto">Need an account?<a href="./signup.php">Sign up</a> </label>
            <input type="text" name="username" id="username" class="form-control bg-2" placeholder="Username">
        </div>
        <div class="form-group mt-3">
            <label for="password" class="form-label text2 fw-bold">Password</label>
            <input type="password" name="password" id="password" class="form-control bg-2" placeholder="Password">
        </div>
        <div class="form-group mt-4">
            <input class="btn btn-primary w-100 mt-2" type="submit" value="Login">
        </div>
        <div class="form-group mt-4 text-center">
            <p>
                <a href="#" class="link-secondary nav-link">Forgot password?</a>
            </p>
        </div>
    </form>
</main>

<!-- <div class="container w-50 mt-5">
    <h1 class="title">Authenticate</h1>
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
            <input class="btn btn-primary w-100 mt-2" type="submit" value="Login">
        </div>
    </form>
    <p>
        No account? <a href="#">Sign up</a> here.
    </p>
</div> -->

<?php include_once "../components/footer.php"; ?>