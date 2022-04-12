<?php 
    $cssLink = "../../assets/css/style.css";
    $indexLink = "../../index.php";
    include_once '../components/header.php'; 

?>

<main>
    <div class="illustration mt-3 d-flex justify-content-center">
        <img src="../../assets/img/illustration/contactlist-mobile.svg" alt="" width="300" height="200">
    </div>
    <div class="contact-list mt-3">
        <div class="list-header d-flex justify-content-between container">
            <h1>Contact list</h1>
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
                        <img src="../../assets/img/illustration/avatarOne.svg" alt="" width="50">
                    </th>
                    <td class="w-75 border-0">
                        <h6 class="fw-bold">Tayeb SOUINI</h6>
                        <p>
                            Tayebsouini@gmail.com
                            <br>
                            212 6 07 18 96 71
                        </p>
                    </td>
                </tr>
                <tr class="border-radius border-0">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarTwo.svg" alt="" width="50">
                    </th>
                    <td class="w-75 border-0">
                        <h6 class="fw-bold">Sanae Rafya</h6>
                        <p>
                            Sanaerafya@gmail.com
                            <br>
                            212 6 43 99 96 01
                        </p>
                    </td>
                </tr>
                <tr class="border-radius bg-list text-dark">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarOne.svg" alt="" width="50">
                    </th>
                    <td class="w-75 border-0">
                        <h6 class="fw-bold">Tayeb SOUINI</h6>
                        <p>
                            Tayebsouini@gmail.com
                            <br>
                            212 6 07 18 96 71
                        </p>
                    </td>
                </tr>
                <tr class="border-radius border-0">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarTwo.svg" alt="" width="50">
                    </th>
                    <td class="w-75 border-0">
                        <h6 class="fw-bold">Sanae Rafya</h6>
                        <p>
                            Sanaerafya@gmail.com
                            <br>
                            212 6 43 99 96 01
                        </p>
                    </td>
                </tr>
                <tr class="border-radius bg-list text-dark">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarOne.svg" alt="" width="50">
                    </th>
                    <td class="w-75 border-0">
                        <h6 class="fw-bold">Tayeb SOUINI</h6>
                        <p>
                            Tayebsouini@gmail.com
                            <br>
                            212 6 07 18 96 71
                        </p>
                    </td>
                </tr>
                <tr class="border-radius border-0">
                    <th class="border-0">
                        <img src="../../assets/img/illustration/avatarTwo.svg" alt="" width="50">
                    </th>
                    <td class="w-75 border-0">
                        <h6 class="fw-bold">Sanae Rafya</h6>
                        <p>
                            Sanaerafya@gmail.com
                            <br>
                            212 6 43 99 96 01
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
          <p>
              Enter contact details and press confirm
          </p>
            <form class="mt-4" action="./profil.php">
                <div class="form-group">
                    <label for="name" class="form-label text-blue fw-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-control modalInput" placeholder="name">
                </div>
                <div class="form-group mt-3">
                    <label for="phone" class="form-label text-blue fw-bold">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control modalInput" placeholder="Phone">
                </div>
                <div class="form-group mt-3">
                    <label for="email" class="form-label text-blue fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control modalInput" placeholder="Email">
                </div>
                <div class="form-group mt-3">
                    <label for="address" class="form-label text-blue fw-bold">Address</label>
                    <input type="text" name="address" id="address" class="form-control modalInput" placeholder="Address">
                </div>
                <div class="form-group mt-4 row">
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-light btn-modal w-100" data-bs-dismiss="modal">Confirm</button>
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
        <span class="d-block">Name</span>
        <span class="d-block">Tayeb SOUINI</span>
        <span class="d-block">Phone</span>
        <span class="d-block">+212 6 07 18 96 71</span>
        <span class="d-block">Email</span>
        <span class="d-block">Tayebsouini@gmail.com</span>
        <span class="d-block">Address</span>
        <span class="d-block">N° 1 rue sebtah Qu El Mohammadi Youssoufia</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-light btn-modal w-100" data-bs-dismiss="modal">Edit</button>
        <button type="button" class="btn btn-light w-100 bg-danger text-light" data-bs-dismiss="modal">Delete</button>
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
            <form class="mt-4" action="./profil.php">
                <div class="form-group">
                    <label for="name" class="form-label text-blue fw-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-control modalInput" value="Tayeb SOUINI">
                </div>
                <div class="form-group mt-3">
                    <label for="phone" class="form-label text-blue fw-bold">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control modalInput" value="+212 6 07 18 96 71">
                </div>
                <div class="form-group mt-3">
                    <label for="email" class="form-label text-blue fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control modalInput" value="TayebSOUINI@gmail.com">
                </div>
                <div class="form-group mt-3">
                    <label for="address" class="form-label text-blue fw-bold">Address</label>
                    <input type="text" name="address" id="address" class="form-control modalInput" value="N° 1 rue sebtah Qu El mohammadi Youssoufia">
                </div>
                <div class="form-group mt-4 row">
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-light btn-modal w-100" data-bs-dismiss="modal">Save</button>
                        <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Cancel</button>
                        
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
