<?php
include_once '../config.php';

$pdo = pdo_connect_mysql();
$fieldsStats = [];
// Check if POST data is not empty
if (!empty($_POST)) {
    //$Firstname = $_POST['Firstname'] ?? '';
    $Firstname = $_POST['Firstname'];
    $fieldsStats[] =  inputIsValid('alpha', $Firstname);

    $Lastname = $_POST['Lastname'];
    $fieldsStats[] = inputIsValid('alpha', $Lastname);
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    //$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    //$Username = $_POST['Username'];
    //$Password = $_POST['Password'];
    $EnrollNumber = $_POST['EnrollNumber'];
    $DateOfAdmission = $_POST['DateOfAdmission'];



    if(in_array(false, $fieldsStats)) {
        die("Format inforret");
    }

    addStudent($DateOfAdmission, $EnrollNumber, $Firstname, $Lastname, $Email, $Phone);
    // Insert new record into the contacts table
    //$stmt = $pdo->prepare('INSERT INTO student (Firstname, Lastname, Email, Phone, EnrollNumber, DateOfAdmission) VALUES (?, ?, ?, ?, ?, ?)');
    //$stmt->execute([$Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission]);

    //pdo_deconnect_msql($pdo);
}




function inputIsValid($type, $field) {
    if ($type == 'alpha') {
        if(!preg_match("/^[a-zA-Z-' ]*$/",$field)) {
            return false;
        } else {
            return true;
        }
    } else if ($type == 'email') {
        if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$field)) {
            return false;
        } else {
            return true;
        }
    }
}

header('location: ../../../view/student.php');
