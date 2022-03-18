"use-strict";

let role = document.getElementsByClassName('role');

function validate(e){
    let firstnameValue = document.forms['signup']['firstname'].value;
    let lastnameValue = document.forms['signup']['lastname'].value;
    let emailValue = document.forms['signup']['email'].value;
    let phoneValue = document.forms['signup']['phone'].value;
    let usernameValue = document.forms['signup']['username'].value;
    let passwordValue = document.forms['signup']['password'].value;
    let passwordConfirmationValue = document.forms['signup']['passwordConfirmation'].value;
    
    let firstnameMsg = document.getElementById("firstnameMsg");
    let lastnameMsg = document.getElementById("lastnameMsg");
    let emailMsg = document.getElementById("emailMsg");
    let phoneMsg = document.getElementById("phoneMsg");
    let usernameMsg = document.getElementById("usernameMsg");
    let passwordMsg = document.getElementById("passwordMsg");
    let passwordConfirmationMsg = document.getElementById("passwordConfirmationMsg");

    firstnameMsg.innerText = "";
    lastnameMsg.innerText = "";
    emailMsg.innerText = "";
    phoneMsg.innerText = "";
    usernameMsg.innerText = "";
    passwordMsg.innerText = "";
    passwordConfirmationMsg = "";
    
    let emailRegex = /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
    let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    let phoneRegex = /(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/g;
    let usernameRegex = /^[a-z0-9_-]{3,16}$/igm;
    
    let isValide = true;

    if (firstnameValue == ""){
        firstnameMsg.innerText = "please enter your firstname";
        isValide = false;
    }

    if (lastnameValue == ""){
        lastnameMsg.innerText = "please enter your lastname";
        isValide = false;
    }

    if (emailValue == "") {
        emailMsg.innerText = "please enter your email";
        isValide = false;
    } else if (!emailRegex.test(emailValue)) {
        emailMsg.innerText = "format incorrect";
        isValide = false;
    }

    if (phoneValue == ""){
        phoneMsg.innerText = "please enter your number phone";
        isValide = false;
    } else if (!phoneRegex.test(phoneValue)){
        phoneMsg.innerText = "Format incorrecte";
        isValide = false;
    }

    if (usernameValue == ""){
        usernameMsg.innerText = "please enter the username";
        isValide = false;
    } else if (!usernameRegex.test(usernameValue)){
        usernameMsg.innerText = "format incorrecte";
        isValide = false;
    }

    if (passwordValue == ""){
        passwordMsg.innerText = "please enter your password";
        isValide = false;
    }

    if (passwordConfirmationValue == ""){
        passwordConfirmationMsg.innerText = " enter your password";
        isValide = false;
    } else if (passwordConfirmationValue != passwordValue){
        passwordConfirmationMsg.innerText = "the password is diff a password";
        isValide = false;
    }

    if (!isValide){
        e.preventDefault();
    } 
}
 
function validateAddStudent(e){
    let firstnameValue = document.forms["addStudent"]["Firstname"].value;

    if (firstnameValue == ""){
        document.getElementById("firstnameMsg").innerText = "please enter your name";
        e.preventDefault();
    }

}