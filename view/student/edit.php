<?php

if(!isset($_GET['id'])) {
    header('location: ../../view/student.php');
}

include_once "../../view/components/header.php";
include_once '../../src/controllers/config.php';

$pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('SELECT * FROM student WHERE Id_Student = ?');
$stmt->execute([$_GET['id']]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="container w-50">
    <form method="POST" action="../../src/controllers/student/edit.php">
        <input type="hidden" value="<?php echo $student['Id_Student']?>" name="Id_Student">
        <!--<a href="read.php">Back</a>-->
        <div class="mb-3">
            <label for="Firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" id="Firstname" name="Firstname" value="<?php echo $student['Firstname']; ?>">
        </div>
        <div class="mb-3">
            <label for="Lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="Lastname" name="Lastname" value="<?php echo $student['Lastname']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="Email" value="<?php echo $student['Email']; ?>">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="Phone" value="<?php echo $student['Phone'] ?>">
        </div>
        <div class="mb-3">
            <label for="enrollNumber" class="form-label">EnrollNumber</label>
            <input type="text" class="form-control" id="enrollNumber" name="EnrollNumber" value="<?php echo $student['EnrollNumber']; ?>">
        </div>
        <div class="mb-3">
            <label for="dateOfAdmission" class="form-label">dateOfAdmission</label>
            <input type="text" class="form-control" id="dateOfAdmission" name="DateOfAdmission" value="<?php echo $student['DateOfAdmission']; ?>">
        </div>
        <input class="w-100 bg-success text-light border-0 p-2" type="submit" name="save" value="update">
    </form>
</div>


