

function signupVerify() {
    isValid = false;

    let usernameMsg = document.getElementById("signupUsernameMsg");
    let passwordMsg = document.getElementById("signupPasswordMsg");
    let passwordVerifyMsg = document.getElementById("signupPasswordVerifyMsg");

    usernameMsg.innerText = "";
    passwordMsg.innerText = "";
    passwordVerifyMsg.innerText = "";
    

    let form = document.forms['signup'];
    let username = form['username'].value;
    let password = form['password'].value;
    let passwordVerify = form['passwordVerify'].value;

    let usernameRegex =   /^[a-z0-9_-]{3,15}$/;
    let passwordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/;
    //console.log(username + " " + password + " " + passwordVerify);
    //username validation
    if (username != '' && username.match(usernameRegex)){
        //console.log("true");
        form['username'].classList.remove("invalid");
        isValid = true;
    } else if (username.length < 3 || username.length > 15){
        usernameMsg.innerText  = "username must be between 3 and 15 characters";
        form['username'].classList.add("invalid");
        isValid = false;
    } else {
        usernameMsg.innerText  = "only characters _ and - are valid";
        form['username'].classList.add("invalid");
        isValid = false;
    }

    //password validation
    if (!password.match(passwordRegex)) {
        passwordMsg.innerText = "the password must contain characters, symbols and numbers";
        isValid = false;
    }else if (!passwordVerify.match(passwordRegex)) {
        passwordVerifyMsg.innerText = "the password must contain characters, symbols and numbers";
        isValid = false;
    }else if (password != '') {
        if (password == passwordVerify){
            console.log("true");
            isValid = true;
            console.log(password);
            console.log(passwordVerify);
        } else {
            passwordMsg.innerText = "passwords is not similar";
            isValid = false;
            console.log(password);
            console.log(passwordVerify);
        }
    } else if (password.length < 8) {
        passwordMsg.innerText = "at least 8 characters";
        form['password'].classList.add("invalid");
        isValid = false;
    } else if (passwordVerify.length < 8) {
        passwordVerifyMsg.innerText = "at least 8 characters";
        form['passwordVerify'].classList.add("invalid");
        isValid = false;
    }

    return isValid;
} 

function addContactVerify() {
    let isValid = false;
    
    let addContactNameMsg = document.getElementById("addContactNameMsg");
    let addContactAddressMsg = document.getElementById("addContactAddressMsg");
    let addContactEmailMsg  = document.getElementById("addContactEmailMsg");
    let addContactPhoneMsg  = document.getElementById("addContactPhoneMsg");
    addContactNameMsg.innerText = "";
    addContactAddressMsg.innerText = "";
    addContactEmailMsg.innerText = "";
    addContactPhoneMsg.innerText = "";
    
    let addContactForm = document.forms['addContact'];

    let name = addContactForm['name'].value;
    let phone = addContactForm['phone'].value;
    let email = addContactForm['email'].value;
    let address = addContactForm['address'].value;

    let nameRegex = /^[a-zA-Z]{2,}$/;
    let phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    let emailRegex =  /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
    let phoneMoroccoRegex = /(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/g;

    // alert(name.match(nameRegex));

    if (name.match(nameRegex) && phone.match(phoneRegex) && email.match(emailRegex) && address.length < 256){
        isValid = true;
    } else if (!name.match(nameRegex)) {
        addContactNameMsg.innerText = "the name must be at least 2 characters";
        addContactForm['name'].classList.add("invalid");
        isValid = false;
    } else if (!phone.match(phoneRegex)) {
        addContactPhoneMsg.innerText = "number phone is not valid";
        addContactForm['phone'].classList.add("invalid");
        isValid = false;
    } else if (!email.match(emailRegex)){
        addContactEmailMsg.innerText = "Email is not valid";
        addContactForm['email'].classList.add("invalid");
        isValid = false;
    }else if (address.length > 255) {
        addContactAddressMsg.innerText = "Address is not valid (255 char MAX)";
        addContactForm['address'].classList.add("invalid");
        isValid = false;
    }
    return isValid;
}

function editContactVerify() {
    let isValid = false;

    
    
    let editContactNameMsg = document.getElementById("editContactNameMsg");
    let editContactAddressMsg = document.getElementById("editContactAddressMsg");
    let editContactEmailMsg  = document.getElementById("editContactEmailMsg");
    let editContactPhoneMsg  = document.getElementById("editContactPhoneMsg");
    editContactNameMsg.innerText = "";
    editContactAddressMsg.innerText = "";
    editContactEmailMsg.innerText = "";
    editContactPhoneMsg.innerText = "";
    
    let editContactForm = document.forms['editContact'];

    let name = editContactForm['name'].value;
    let phone = editContactForm['phone'].value;
    let email = editContactForm['email'].value;
    let address = editContactForm['address'].value;

    let nameRegex = /^[a-zA-Z]{2,}$/;
    let phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    let emailRegex =  /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
    let phoneMoroccoRegex = /(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/g;

    // alert(name.match(nameRegex));

    if (name.match(nameRegex) && phone.match(phoneRegex) && email.match(emailRegex) && address.length < 256){
        isValid = true;
    } else if (!name.match(nameRegex)) {
        editContactNameMsg.innerText = "the name must be at least 2 characters";
        editContactForm['name'].classList.add("invalid");
        isValid = false;
    } else if (!phone.match(phoneRegex)) {
        editContactPhoneMsg.innerText = "number phone is not valid";
        editContactForm['phone'].classList.add("invalid");
        isValid = false;
    } else if (!email.match(emailRegex)){
        editContactEmailMsg.innerText = "Email is not valid";
        editContactForm['email'].classList.add("invalid");
        isValid = false;
    }else if (address.length > 255) {
        editContactAddressMsg.innerText = "Address is not valid (255 char MAX)";
        editContactForm['address'].classList.add("invalid");
        isValid = false;
    }
    return isValid;
}