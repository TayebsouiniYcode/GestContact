<?php include_once "../components/header.php"; ?>

<div class="container w-50 mt-5">
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
</div>

<?php include_once "../components/footer.php"; ?>