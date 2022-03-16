<?php
    include '../view/components/header.php';
?>

<main>
    <div class="container mt-3">
        <div class="content text-center mb-3">
            <h1>E-Classe</h1>
            <h2 class="h4">Welcome to E-Classe</h2>
        </div>
        <form name="signup" method="POST" action="../src/controllers/utilisateur/signup.php" onsubmit="validate(event)">
            <div class="row">
                <div class="mb-1 col-lg-4">
                    <label for="firstname" class="form-label">Firstname <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstname" name="firstname" require>
                    <span class="text-danger" id="firstnameMsg"></span>
                </div>
                <div class="mb-1 col-lg-4">
                    <label for="lastname" class="form-label">Lastname <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastname" name="lastname" require>
                    <span class="text-danger" id="lastnameMsg"></span>
                </div>
                <div class="mb-1 col-lg-4">
                    <label for="dateOfBirth" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                </div>
            </div>
            <div class="row">
                <div class="mb-1">
                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="username" name="username" require>
                    <span class="text-danger" id="usernameMsg"></span>
                </div>
            </div>
            <div class="row">
                <div class="mb-1 col-lg-6">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" require>
                    <span class="text-danger" id="passwordMsg"></span>
                </div>
                <div class="mb-1 col-lg-6">
                    <label for="passwordConfirmation" class="form-label">Password confirmation <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="passwordConfirmation" name="passwordConfirmation">
                    <span class="text-danger" id="passwordConfirmationMsg"></span>
                </div>
            </div>
            <div class="row">
                <div class="mb-1 col-lg-4">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                    <span class="text-danger" id="phoneMsg"></span>
                </div>
                <div class="mb-1 col-lg-8">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email">
                    <span class="text-danger" id="emailMsg"></span>
                </div>
            </div>
            <div class="mb-1">
                <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                <br>
                <input type="radio"  id="role" name="role" value="student" class="role">
                <label for="student">Student</label>
                <input type="radio"  id="role" name="role" value="admin" class="role">
                <label for="admin">Admin</label>
            </div>
            <div class="row" id="studentSection">
                <div class="mb-1 col-lg-6">
                    <label for="enrollNumber" class="form-label">Enroll Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="enrollNumber" name="enrollNumber">
                </div>
                <div class="mb-1 col-lg-6">
                    <label for="dateOfAdmission" class="form-label">Date of admission <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dateOfAdmission" name="dateOfAdmission">
                </div>
            </div>
            <div class="mt-4">
                <input class="btn btn-primary bg-blue w-100" type="submit" name="create" value="sign-up">
            </div>
        </form>
    </div>
</main>
<script src="../assets/js/app.js"></script>
<script>
    // function validate(){
    //     let firstnameValue = document.forms['signup']['firstname'].value;
    //     let lastnameValue = document.forms['signup']['lastname'].value;
    // }

    // let firstname = document.getElementById("firstname");
    // //let firstname = document.forms['signup']['firstname']
    // firstname.addEventListener("keyup", function(){

    //     if (firstname.value == ""){
    //         firstname.style.borderColor = "#FF0000";
    //         document.getElementById("firstnameMsg").innerText = "first name a dba3";
    //     } else {
    //         firstname.style.borderColor = "green";
    //         document.getElementById("firstnameMsg").innerText = "nta naadi";
    //     }
    // });

</script>