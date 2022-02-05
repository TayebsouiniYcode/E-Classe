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
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-1">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-1">
                        <label for="enrollNumber" class="form-label">enroll Number</label>
                        <input type="text" class="form-control" id="enrollNumber" name="enrollNumber">
                    </div>
                    <div class="mb-1">
                        <label for="dateOfAdmission" class="form-label">date Of Admission</label>
                        <input type="date" class="form-control" id="dateOfAdmission" name="dateOfAdmission">
                    </div>
                    <!-- image
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    -->
                    <div class="modal-footer">
                        <input class="btn btn-primary bg-blue w-100" type="submit" name="save">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>