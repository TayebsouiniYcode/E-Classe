<?php
include_once "../config.php";
$pdo = pdo_connect_mysql();

    if (!empty($_POST)) {
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $EnrollNumber = $_POST['EnrollNumber'];
        $DateOfAdmission = $_POST['DateOfAdmission'];

        // Update the record
        $stmt = $pdo->prepare('UPDATE student SET Firstname = ?, Lastname = ?, Email = ?, Phone = ?, EnrollNumber = ?, DateOfAdmission = ? WHERE Id_Student = ?');
        $stmt->execute([$Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission, $_POST['Id_Student']]);
    }



    header('location: ../../../view/student.php');

include "../../../view/components/footer.php";
