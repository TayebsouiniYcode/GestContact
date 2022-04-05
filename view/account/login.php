<?php include_once "../components/header.php"; ?>

<div class="container w-50 mt-5">
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
</div>

<?php include_once "../components/footer.php"; ?>