<?php include_once "../components/header.php"; ?>

<div class="container mt-5">
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
    
</div>

<?php include_once "../components/footer.php"; ?>