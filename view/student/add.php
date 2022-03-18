<?php


$errors = [];
$fields = ['Firstname', 'Lastname', 'Email', 'Phone', 'EnrollNumber', 'DateOfAdmission'];
//$optionalFields = ['Phone'];
$values = [];
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $field) {
        //if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
        if (empty($_POST[$field])) {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }
    if (empty($errors)) {
        foreach ($fields as $field) {
            if ($field === "favoriteFruit") {
                printf("%s: %s<br />", $field, var_export($_POST[$field], TRUE));
            } else {
                printf("%s: %s<br />", $field, $_POST[$field]);
            }
        };
        exit;
    }
}*/
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
                <form name="addStudent" method="POST" action="../src/controllers/student/add.php" onsubmit="validateAddStudent(event)">
                <!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
                    <!--<a href="read.php" class="btn btn-primary">Back</a>-->
                    <div class="mb-1">
                        <label for="Firstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="name" name="Firstname">
                        <span class="text-danger" id="firstnameMsg"></span>
                        <?php if (in_array('Firstname', $errors)): ?>
                            <span class="text-danger">Entre votre prénom</span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-1">
                        <label for="Lastname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="name" name="Lastname">
                        <?php if (in_array('Lastname', $errors)): ?>
                            <span class="text-danger">Entrer votre nom</span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-1">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email">
                        <?php if (in_array('Email', $errors)): ?>
                            <span class="text-danger">Entrer votre Email</span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-1">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="Phone" name="Phone">
                        <?php if (in_array('Phone', $errors)): ?>
                            <span class="text-danger">Entrer votre numéro de téléphone</span>
                        <?php endif; ?>
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
                        <input type="text" class="form-control" id="EnrollNumber" name="EnrollNumber">
                        <?php if (in_array('EnrollNumber', $errors)): ?>
                            <span class="text-danger">Entrer votre numéro d'inscription</span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-1">
                        <label for="DateOfAdmission" class="form-label">date Of Admission</label>
                        <input type="date" class="form-control" id="DateOfAdmission" name="DateOfAdmission">
                        <?php if (in_array('DateOfAdmission', $errors)): ?>
                            <span class="text-danger">Entrer la date</span>
                        <?php endif; ?>
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

<script src="./../assets/js/app.js"></script>