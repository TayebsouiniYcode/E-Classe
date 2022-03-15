<?php
    include '../view/components/header.php';
?>

<main>
    <div class="container mt-3">
        <div class="content text-center mb-3">
            <h1>E-Classe</h1>
            <h2 class="h4">Welcome to E-Classe</h2>
        </div>
        <form method="POST" action="../src/controllers/utilisateur/signup.php">
            <div class="row">
                <div class="mb-1 col-lg-4">
                    <label for="firstname" class="form-label">Firstname <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="mb-1 col-lg-4">
                    <label for="lastname" class="form-label">Lastname <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="mb-1 col-lg-4">
                    <label for="dateOfBirth" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                </div>
            </div>
            <div class="row">
                <div class="mb-1">
                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
            <div class="row">
                <div class="mb-1 col-lg-6">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-1 col-lg-6">
                    <label for="passwordConfirmation" class="form-label">Password confirmation <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="phone" name="phone">
                </div>
            </div>
            <div class="row">
                <div class="mb-1 col-lg-4">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-1 col-lg-8">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="mb-1">
                <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                <br>
                <input type="radio"  id="role" name="role" value="student">
                <label for="student">Student</label>
                <input type="radio"  id="role" name="role" value="admin">
                <label for="admin">Admin</label>
            </div>
            <div class="row d-none" id="studentSection">
                <div class="mb-1 col-lg-6">
                    <label for="enrollNumber" class="form-label">Enroll Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="enrollNumber" name="enrollNumber">
                </div>
                <div class="mb-1 col-lg-6">
                    <label for="dateOfAdmission" class="form-label">Date of admission <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="dateOfAdmission" name="dateOfAdmission">
                </div>
            </div>
            <div class="mt-4">
                <input class="btn btn-primary bg-blue w-100" type="submit" name="create" value="sign-up">
            </div>
        </form>
    </div>
</main>