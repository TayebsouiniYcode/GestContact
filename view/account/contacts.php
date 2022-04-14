<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    $loginLink = "void";
    $script = "../../assets/js/validation.js";
    include_once '../components/header.php'; 

?>

<main class="mt-5 mt-lg-0 gap-5 vh-75 align-items-center">
    <div class="illustration mt-5 mt-lg-0 d-flex justify-content-center">
        <img class="lg-illustration" src="../../assets/img/illustration/contactlist-mobile.svg" alt="" width="300" height="200">
    </div>
    <div class="contact-list mt-4 mt-lg-0 w-100">
        <div class="list-header d-flex justify-content-between container">
            <h1 class="">Contact list</h1>
            <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="bg-transparent border-0">
                <img class="d-block" src="../../assets/img/illustration/addIcon.svg" alt="">
            </button>
        </div>
        <table class="table table-striped align-middle mt-4">
            <!-- <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead> -->
            <tbody>
                <tr class="border-radius bg-list text-dark" data-bs-toggle="modal" data-bs-target="#detailsModal">
                    <th class="border-0">
                        <img  src="../../assets/img/illustration/avatarOne.svg" alt="" width="50">
                    </th>
                    <td class="w-md-100 border-0 ">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-bold pt-3">Tayeb SOUINI</h6>
                            <p class="d-lg-none m-0">
                                Tayebsouini@gmail.com
                            </p>
                            <p class="d-lg-none ">
                                212 6 07 18 96 71
                            </p>
                        </div>
                        <p class="d-none d-lg-block fw-bold m-0 ">
                            Tayebsouini@gmail.com
                        </p>
                        <p class="d-none d-lg-block fw-bold m-0">
                            212 6 07 18 96 71
                        </p>
                        <p class="d-none d-lg-block fw-bold m-0">
                            N° 1 rue sebtah Qu El Mohammadi - Youssoufia
                        </p>
                    </div>
                    </td>
                </tr>
                <tr class="border-radius border-0" data-bs-toggle="modal" data-bs-target="#detailsModal">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarTwo.svg" alt="" width="50">
                    </th>
                    <td class="w-md-100 border-0 w-md-100 border-0 d-lg-flex justify-content-between">
                        <h6 class="fw-bold pt-3">Sanae Rafya</h6>
                        <p class="d-lg-none">
                            Sanaerafya@gmail.com
                            <br>
                            212 6 43 99 96 01
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            sanaerafya@gmail.com
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            212 6 07 18 96 71
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            N° 1 rue sebtah Qu El Mohammadi - Youssoufia
                        </p>
                    </td>
                </tr>
                <tr class="border-radius bg-list text-dark" data-bs-toggle="modal" data-bs-target="#detailsModal">
                    <th class="border-0">
                        <img  src="../../assets/img/illustration/avatarOne.svg" alt="" width="50">
                    </th>
                    <td class="w-md-100 border-0 ">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-bold pt-3">Tayeb SOUINI</h6>
                            <p class="d-lg-none m-0">
                                Tayebsouini@gmail.com
                            </p>
                            <p class="d-lg-none ">
                                212 6 07 18 96 71
                            </p>
                        </div>
                        <p class="d-none d-lg-block fw-bold m-0 ">
                            Tayebsouini@gmail.com
                        </p>
                        <p class="d-none d-lg-block fw-bold m-0">
                            212 6 07 18 96 71
                        </p>
                        <p class="d-none d-lg-block fw-bold m-0">
                            N° 1 rue sebtah Qu El Mohammadi - Youssoufia
                        </p>
                    </div>
                    </td>
                </tr>
                <tr class="border-radius border-0" data-bs-toggle="modal" data-bs-target="#detailsModal">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarTwo.svg" alt="" width="50">
                    </th>
                    <td class="w-md-100 border-0 w-md-100 border-0 d-lg-flex justify-content-between">
                        <h6 class="fw-bold pt-3">Sanae Rafya</h6>
                        <p class="d-lg-none">
                            Sanaerafya@gmail.com
                            <br>
                            212 6 43 99 96 01
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            sanaerafya@gmail.com
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            212 6 07 18 96 71
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            N° 1 rue sebtah Qu El Mohammadi - Youssoufia
                        </p>
                    </td>
                </tr>
                <tr class="border-radius bg-list text-dark" data-bs-toggle="modal" data-bs-target="#detailsModal">
                    <th class="border-0">
                        <img  src="../../assets/img/illustration/avatarOne.svg" alt="" width="50">
                    </th>
                    <td class="w-md-100 border-0 ">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-bold pt-3">Tayeb SOUINI</h6>
                            <p class="d-lg-none m-0">
                                Tayebsouini@gmail.com
                            </p>
                            <p class="d-lg-none ">
                                212 6 07 18 96 71
                            </p>
                        </div>
                        <p class="d-none d-lg-block fw-bold m-0 ">
                            Tayebsouini@gmail.com
                        </p>
                        <p class="d-none d-lg-block fw-bold m-0">
                            212 6 07 18 96 71
                        </p>
                        <p class="d-none d-lg-block fw-bold m-0">
                            N° 1 rue sebtah Qu El Mohammadi - Youssoufia
                        </p>
                    </div>
                    </td>
                </tr>
                <tr class="border-radius border-0" data-bs-toggle="modal" data-bs-target="#detailsModal">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarTwo.svg" alt="" width="50">
                    </th>
                    <td class="w-md-100 border-0 w-md-100 border-0 d-lg-flex justify-content-between">
                        <h6 class="fw-bold pt-3">Sanae Rafya</h6>
                        <p class="d-lg-none">
                            Sanaerafya@gmail.com
                            <br>
                            212 6 43 99 96 01
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            sanaerafya@gmail.com
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            212 6 07 18 96 71
                        </p>
                        <p class="d-none d-lg-block fw-bold pt-3">
                            N° 1 rue sebtah Qu El Mohammadi - Youssoufia
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>



<div class="modal" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title fw-bold" id="staticBackdropLabel">Add contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p class="fs-2">
              Enter contact details and press confirm
          </p>
            <form class="mt-4" action="" name="addContact" onsubmit="return addContactVerify()">
                <div class="form-group">
                    <label for="name" class="form-label text-blue fw-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-control modalInput fw-bold" placeholder="name">
                    <span class="text-danger" id="addContactNameMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="phone" class="form-label text-blue fw-bold">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control modalInput fw-bold" placeholder="Phone">
                    <span class="text-danger" id="addContactPhoneMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="email" class="form-label text-blue fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control modalInput fw-bold" placeholder="Email">
                    <span class="text-danger" id="addContactEmailMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="address" class="form-label text-blue fw-bold">Address</label>
                    <input type="text" name="address" id="address" class="form-control modalInput fw-bold" placeholder="Address">
                    <span class="text-danger" id="addContactAddressMsg"></span>
                </div>
                <div class="form-group mt-4 row">
                    <div class="modal-footer">
                        <!-- <button type="submit"  class="btn btn-light btn-modal w-100 fw-bold" >Confirm</button> -->
                        <input type="submit" class="btn btn-light btn-modal w-100 fw-bold" value="Confirm">
                        <button type="button" class="btn btn-light w-100 fw-bold" data-bs-dismiss="modal">Cancel</button>
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
        <span class="d-block fs-3 fw-bold">Name</span>
        <span class="d-block fs-4">Tayeb SOUINI</span>
        <hr>
        <span class="d-block fs-3 fw-bold">Phone</span>
        <span class="d-block fs-4">+212 6 07 18 96 71</span>
        <hr>
        <span class="d-block fs-3 fw-bold">Email</span>
        <span class="d-block fs-4">Tayebsouini@gmail.com</span>
        <hr>
        <span class="d-block fs-3 fw-bold">Address</span>
        <span class="d-block fs-4">N° 1 rue sebtah Qu El Mohammadi Youssoufia</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light w-100 fw-bold" data-bs-dismiss="modal">Cancel</button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-light btn-modal w-100 fw-bold" data-bs-dismiss="modal">Edit</button>
        <button type="button" class="btn btn-light w-100 bg-danger text-light fw-bold" data-bs-dismiss="modal">Delete</button>
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
          <p class="fs-3">
              Change contact details and press save
          </p>
            <form class="mt-4" action="./profil.php" name="editContact" onsubmit="return editContactVerify()">
                <div class="form-group">
                    <label for="name" class="form-label text-blue fw-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-control modalInput fw-bold" value="Tayeb SOUINI">
                    <span class="text-danger" id="editContactNameMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="phone" class="form-label text-blue fw-bold">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control modalInput fw-bold" value="+212 6 07 18 96 71">
                    <span class="text-danger" id="editContactPhoneMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="email" class="form-label text-blue fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control modalInput fw-bold" value="TayebSOUINI@gmail.com">
                    <span class="text-danger" id="editContactEmailMsg"></span>
                </div>
                <div class="form-group mt-3">
                    <label for="address" class="form-label text-blue fw-bold">Address</label>
                    <input type="text" name="address" id="address" class="form-control modalInput fw-bold" value="N° 1 rue sebtah Qu El mohammadi Youssoufia">
                    <span class="text-danger" id="editContactAddressMsg"></span>
                </div>
                <div class="form-group mt-4 row">
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-light btn-modal w-100 fw-bold">Save</button>
                        <button type="button" class="btn btn-light w-100 fw-bold" data-bs-dismiss="modal">Cancel</button>
                        
                    </div>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
<!-- <div class="container mt-5">
    <h1 class="tile">Contacts</h1>
    <div class="contact-list mt-5">
        <h2 class="sub-title">Contacts list:</h2>
        <div class="list-item m-5 d-flex gap-5">
            <h3 class="name h5">Alonzo Barber</h3>
            <div class="email">alonzo@barber.com</div>
            <div class="phone">06 07 18 96 71</div>
            <div class="adress">N 1 rue Sebta Qu El mohammadi</div>
            <div class="buttons">
                <a href="">Edit</a>
                <a href="">Delete</a>
            </div>
        </div>
        <hr>
        <div class="list-item m-5 d-flex gap-5">
            <h3 class="name h5">Alonzo Barber</h3>
            <div class="email">alonzo@barber.com</div>
            <div class="phone">06 07 18 96 71</div>
            <div class="adress">N 1 rue Sebta Qu El mohammadi</div>
            <div class="buttons">
                <a href="">Edit</a>
                <a href="">Delete</a>
            </div>
        </div>
    </div>
    <div class="add-contact">
        <h2 class="add-contact">Add contact</h2>
        <form action="">
            <div class="form-group d-flex w-100 gap-4">
                <div class="sub-group w-50">
                    <label for="name" class="label-form">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                </div>
                <div class="sub-group w-50">
                    <label for="phone" class="label-form">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Adress</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter address">
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary mt-4">
            </div>
        </form>
    </div>
</div> -->

<?php include_once "../components/footer.php"; ?>
