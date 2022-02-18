<?php
    include "./components/header.php";
?>
<!-- Modal add new student -->
<div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../src/controllers/student/add.php">
                    <!--<a href="read.php" class="btn btn-primary">Back</a>-->
                    <div class="mb-1">
                        <label for="Firstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="name" name="Firstname" required>
                    </div>
                    <div class="mb-1">
                        <label for="Lastname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="name" name="Lastname" required>
                    </div>
                    <div class="mb-1">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" required>
                    </div>
                    <div class="mb-1">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="Phone" name="Phone" required>
                    </div>
                    <!--
                    <div class="mb-1">
                        <label for="Username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="Username" name="Username">
                    </div>
                    <div class="mb-1">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="Password">
                    </div>
                    -->
                    <div class="mb-1">
                        <label for="EnrollNumber" class="form-label">enroll Number</label>
                        <input type="text" class="form-control" id="EnrollNumber" name="EnrollNumber" required>
                    </div>
                    <div class="mb-1">
                        <label for="DateOfAdmission" class="form-label">date Of Admission</label>
                        <input type="date" class="form-control" id="DateOfAdmission" name="DateOfAdmission" required>
                    </div>
                    <!-- image
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    -->
                    <div class="modal-footer">
                        <input class="btn btn-primary bg-blue w-100" type="submit" name="create">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>