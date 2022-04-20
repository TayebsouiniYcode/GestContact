<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    $loginLink = "../../script/logout.php";
    $loginName = "Logout";
    include_once '../components/header.php';
    session_start(); 
?>
<main class="mt-5">
    <h1 class="title text-center fw-bolder">Welcome, <?php echo $_SESSION['username'];?>!</h1>
    <div class="content d-lg-flex flex-row-reverse mt-5 mt-lg-0 pt-xl-4 gap-5 vh-75 align-items-center">
      <div class="illustration mt-5 mt-lg-0 d-flex justify-content-center">
          <img class="lg-illustration" src="../../assets/img/illustration/profile.svg" alt="" width="300" height="200">
      </div>
      <div class="btn-list m-auto w-100">
        <div class="mt-5">
            <a href="./contacts.php" class="btn btn-primary fw-bold w-100">Contact list</a>
        </div>
        <div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#detailsModal" class="btn btn-secondary fw-bold w-100 mt-5">Details</button>
        </div>
        <div>
          <button type="button" disabled data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-secondary fw-bold w-100 mt-3">Edit</button>
        </div>
      </div>
    </div>
</main>

<!-- detailsModal -->
<div class="modal" id="detailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title fw-bold" id="staticBackdropLabel">Datails</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="d-block fs-3">Username</span>
        <span class="d-block fs-3"><?php echo $_SESSION['username']; ?></span>
        <span class="d-block fs-3">Sign up date</span>
        <span class="d-block fs-3"><?php echo $_SESSION['signupDate'] ?></span>
        <span class="d-block fs-3">Last login</span>
        <span class="d-block fs-3"><?php echo $_SESSION['lastLoginDate']->format('Y-m-d H:i:s'); ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light w-100 fw-bold" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- edit Modal -->
<div class="modal" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title fw-bold" id="staticBackdropLabel">ُEdit profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fs-3">
          Modify your informations and enter confirm
        </p>
        <form class="mt-4" action="./profil.php">
          <div class="form-group">
              <label for="username" class="form-label text2 fw-bold">Username</label>
              <input type="text" name="username" id="username" class="form-control modalInput fw-bold" placeholder="Username" value="Alex">
          </div>
          <div class="form-group mt-3">
              <label for="password" class="form-label text2 fw-bold">Password</label>
              <input type="password" name="password" id="password" class="form-control modalInput fw-bold" placeholder="Password">
          </div>
          <hr>
          <div class="form-group mt-3">
              <label for="curentPassword" class="form-label text2 fw-bold">Current Password</label>
              <input type="password" name="curentPassword" id="curentPassword" class="form-control modalInput fw-bold" placeholder="Password">
          </div>
          <div class="form-group mt-4 row">
            <div class="modal-footer">
              <input class="btn btn-light btn-modal w-100 fw-bold" data-bs-dismiss="modal" type="submit" value="confirm"> 
              <button type="button" class="btn btn-light w-100 fw-bold" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<?php include_once '../components/footer.php'; ?>