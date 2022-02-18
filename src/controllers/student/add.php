<?php
include_once '../config.php';

$pdo = pdo_connect_mysql();

// Check if POST data is not empty
if (!empty($_POST)) {
    //$Firstname = $_POST['Firstname'] ?? '';
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    //$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    //$Username = $_POST['Username'];
    //$Password = $_POST['Password'];
    $EnrollNumber = $_POST['EnrollNumber'];
    $DateOfAdmission = $_POST['DateOfAdmission'];

    addStudent($DateOfAdmission, $EnrollNumber, $Firstname, $Lastname, $Email, $Phone);
    // Insert new record into the contacts table
    //$stmt = $pdo->prepare('INSERT INTO student (Firstname, Lastname, Email, Phone, EnrollNumber, DateOfAdmission) VALUES (?, ?, ?, ?, ?, ?)');
    //$stmt->execute([$Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission]);

    //pdo_deconnect_msql($pdo);
}

header('location: ../../../view/student.php');