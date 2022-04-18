listContactNodes = document.querySelectorAll(".contacts");

listContactNodes.forEach(contact => {
    contact.addEventListener("mouseover", function() {
    let a = this.getAttribute("data").split(",");
    let id = a[0];
    let name = a[1];
    let phone = a[2];
    let email = a[3];
    let address = a[4];
    console.log("id: " + id + " name : " + name + " phone : " + phone + " email: " + email + " address: " + address);

    document.getElementById("detailsName").innerText = name;
    document.getElementById("detailsPhone").innerText = phone;
    document.getElementById("detailsEmail").innerText = email;
    document.getElementById("detailsAddress").innerText = address;

    document.getElementById("editId").value = id;
    document.getElementById("editName").value = name;
    document.getElementById("editPhone").value = phone;
    document.getElementById("editEmail").value = email;
    document.getElementById("editAddress").value = address;

    document.getElementById("deleteId").value = id;
    });
});
