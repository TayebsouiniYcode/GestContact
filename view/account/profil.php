<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    $loginLink = "void";
    include_once '../components/header.php'; 
?>
<main class="mt-5">
    <h1 class="title text-center fw-bolder">Welcome, Alex!</h1>
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
          <button type="button" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-secondary fw-bold w-100 mt-3">Edit</button>
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
        <span class="d-block">Username</span>
        <span class="d-block">Alex</span>
        <span class="d-block">Sign up date</span>
        <span class="d-block">Sun, 07 Apr 2019 16:14:32 +0000</span>
        <span class="d-block">Last login</span>
        <span class="d-block">Mon, 06 Apr 2019 14:32:01 +0000</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
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
            <!-- <div class="modal-footer mt-2 col-12 row">
              <div class="item col-6">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">< Previous</button>
              </div>
              <div class="item col-5">
                <input class="btn btn-modal" type="submit" value="confirm"> 
              </div>
            </div> -->
            <div class="modal-footer">
              <input class="btn btn-light btn-modal w-100" data-bs-dismiss="modal" type="submit" value="confirm"> 
              <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!-- <div class="container w-75 mt-5">
    <h1 class="title">Welcome, Alex!</h1>

    <div class="informations">
        <h2 class="sub-title mt-5">Your profile:</h2>
        <hr>
        <p>
            <em>Username</em> &emsp;&emsp;&emsp;&emsp;&emsp; Alex
        </p>
        <hr>
        <p>
            <em>Signup date</em> &emsp;&emsp;&emsp;&emsp;&emsp; Sun, 07 Apr 2019 16:11:25 +0000
        </p>
        <hr>
        <p>
            <em>Last login</em> &emsp;&emsp;&emsp;&emsp;&emsp; Mon, 08 Apr 2019 14:24:17 +0000
        </p>
    </div>
</div> -->

<?php include_once '../components/footer.php'; ?>