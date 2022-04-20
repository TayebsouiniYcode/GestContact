<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    $loginLink = "../../script/logout.php";
    $loginName = "Logout";
    $script = "../../assets/js/validation.js";
    $scriptApp = "../../assets/js/app.js";
    include_once '../components/header.php'; 

    require "../../class/User.php";
    session_start();

    $user = new User($_SESSION['id'], $_SESSION['username'], $_SESSION['password'], $_SESSION['signupDate']);
    $user->selectContact();
?>

<main class="mt-5 mt-lg-0 gap-5 vh-75 align-items-center">
    <div class="illustration mt-5 mt-lg-0 d-flex justify-content-center">
        <img class="" src="../../assets/img/illustration/contactlist-mobile.svg" alt="" width="300" height="100">
    </div>
    <?php 
        if (isset($_GET['msg'])){
            if ($_GET['msg']){
                echo '<div class="alert alert-success" role="alert">'
                        .'contact successfully created'
                        .'</div>';
            } else if(!$_GET['msg']){
                echo '<div class="alert alert-danger" role="alert">'
                        .'Password incorrect'
                        .'</div>';
            }
        }
    ?>
    <div class="contact-list mt-4 mt-lg-0 w-100">
        <div class="list-header d-flex justify-content-between container">
            <h1 class="">Contact list</h1>
            <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="bg-transparent border-0">
                <img class="d-block" src="../../assets/img/illustration/addIcon.svg" alt="">
            </button>
        </div>
        <table class="table table-striped align-middle mt-4">
            <tbody>
                <?php 
                if (count($user->getContactList()) == 0) {
                    echo "<h2 class='m-4'>no contact yet</h2>";
                }
                ?>
                <?php foreach($user->getContactList() as $c) : ?>
                    <tr class="border-radius text-dark" >
                        <th class="border-0" >
                            <img data="<?php echo $c['Id'] . ',' . $c['Name'] . ',' . $c['Phone'] . ',' . $c['Email'] . ',' . $c['Address']; ?>" class="contacts"  src="../../assets/img/illustration/avatarOne.svg" alt="" width="50" data-bs-toggle="modal" data-bs-target="#detailsModal"  data-id="<?php echo $user->getId(); ?>">
                        </th>
                        <td class="w-md-100 border-0 ">
                        <div class="row">
                            <div class="col-md-2">
                                <h6 class="fs-5 fw-normal pt-3"><?php echo $c['Name']; ?></h6>
                                <p class="d-lg-none m-0">
                                    <?php echo $c['Email']; ?>
                                </p>
                                <p class="d-lg-none ">
                                    <?php echo $c['Phone']; ?>
                                </p>
                            </div>
                            <p class="d-none d-lg-block col-md-4 fs-6 pt-3 ">
                                <?php echo $c['Email']; ?>
                            </p>
                            <p class="d-none d-lg-block col-md-2 fs-6 pt-3">
                                <?php echo $c['Phone']; ?>
                            </p>
                            <p class="d-none d-lg-block col-md-4 fs-6 pt-3">
                                <?php echo $c['Address']; ?>
                            </p>
                        </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal add -->
<div class="modal" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title fw-bold" id="staticBackdropLabel">Add contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>
              Enter contact details and press confirm
          </p>
            <form class="mt-4" method="POST" action="../../script/addContact.php" name="addContact" onsubmit="return addContactVerify()">
                <div class="form-group">
                    <label for="name" class="form-label text-blue">Name</label>
                    <input type="text" name="name" id="name" class="form-control modalInput" placeholder="name">
                    <span class="text-danger" id="addContactNameMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="phone" class="form-label text-blue">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control modalInput" placeholder="Phone">
                    <span class="text-danger" id="addContactPhoneMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="email" class="form-label text-blue">Email</label>
                    <input type="email" name="email" id="email" class="form-control modalInput" placeholder="Email">
                    <span class="text-danger" id="addContactEmailMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="address" class="form-label text-blue">Address</label>
                    <input type="text" name="address" id="address" class="form-control modalInput" placeholder="Address">
                    <span class="text-danger" id="addContactAddressMsg"></span>
                </div>
                <div class="form-group mt-4 row">
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-light btn-modal w-100" name="confirm" value="Confirm">
                        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- detailsModal -->
<div class="modal" id="detailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title fw-bold" id="staticBackdropLabel">Datails</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="d-block fs-5">Name</span>
        <span class="d-block fs-6" id="detailsName"></span>
        <hr>
        <span class="d-block fs-5">Phone</span>
        <span class="d-block fs-6" id="detailsPhone">+212 6 07 18 96 71</span>
        <hr>
        <span class="d-block fs-5">Email</span>
        <span class="d-block fs-6" id="detailsEmail">Tayebsouini@gmail.com</span>
        <hr>
        <span class="d-block fs-5">Address</span>
        <span class="d-block fs-6" id="detailsAddress">N° 1 rue sebtah Qu El Mohammadi Youssoufia</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-light btn-modal w-100" data-bs-dismiss="modal">Edit</button>
        <button type="button" class="btn btn-light w-100 bg-danger text-light" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-light btn-modal w-100" data-bs-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- edit modal -->
<div class="modal" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title fw-bold" id="staticBackdropLabel">Edit contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>
              Change contact details and press save
          </p>
            <form class="mt-4" action="../../script/editContact.php" method="POST" name="editContact" onsubmit="return editContactVerify()">
                <input type="hidden" name="id" id="editId"> 
                <div class="form-group">
                    <label for="editName" class="form-label text-blue">Name</label>
                    <input type="text" name="name" id="editName" class="form-control modalInput" value="">
                    <span class="text-danger" id="editContactNameMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="editPhone" class="form-label text-blue">Phone</label>
                    <input type="tel" name="phone" id="editPhone" class="form-control modalInput" value="">
                    <span class="text-danger" id="editContactPhoneMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="editEmail" class="form-label text-blue">Email</label>
                    <input type="email" name="email" id="editEmail" class="form-control modalInput" value="">
                    <span class="text-danger" id="editContactEmailMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="editAddress" class="form-label text-blue">Address</label>
                    <input type="text" name="address" id="editAddress" class="form-control modalInput" value="">
                    <span class="text-danger" id="editContactAddressMsg"></span>
                </div>
                <div class="form-group mt-4 row">
                    <div class="modal-footer">
                        <input type="submit"  class="btn btn-light btn-modal w-100" name="save" value="Save">
                        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title fw-bold" id="staticBackdropLabel">Confirm delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>
              Enter your password and enter confirm
          </p>
            <form class="mt-4" action="../../script/deleteContact.php" method="POST" name="deleteContact">
                <input type="hidden" name="id" value="" id="deleteId"> 
                <div class="form-group">
                    <label for="password" class="form-label text-blue">Password</label>
                    <input type="password" name="password" id="password" class="form-control modalInput">
                </div>
                <div class="form-group mt-4 row">
                    <div class="modal-footer">
                        <input type="submit"  class="btn btn-light btn-modal w-100" name="Confirm" value="Confirm">
                        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
<?php include_once "../components/footer.php"; ?>
