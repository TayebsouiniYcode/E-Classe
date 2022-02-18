<?php
include_once "../config.php";

    if (!empty($_POST)) {
        $Id_Student = $_POST['Id_Student'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $EnrollNumber = $_POST['EnrollNumber'];
        $DateOfAdmission = $_POST['DateOfAdmission'];

        updateStudent($Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission, $Id_Student);
        // Update the record
        //$stmt = $pdo->prepare('UPDATE student SET Firstname = ?, Lastname = ?, Email = ?, Phone = ?, EnrollNumber = ?, DateOfAdmission = ? WHERE Id_Student = ?');
        //$stmt->execute([$Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission, $_POST['Id_Student']]);
    }



    header('location: ../../../view/student.php');

include "../../../view/components/footer.php";
