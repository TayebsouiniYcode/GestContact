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
    
}