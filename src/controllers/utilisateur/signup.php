<?php
    include "../config.php";
    $pdo = pdo_connect_mysql();

    if (!empty($_POST)) {
        $Firstname = $_POST['firstname'];
        $Lastname = $_POST['lastname'];
        $DateOfBirth = $_POST['dateOfBirth'];
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $EnrollNumber = $_POST['enrollNumber'];
        $DateOfAdmission = $_POST['dateOfAdmission'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $Role = $_POST['role'];

        if($Role == "student"){
            signUpStudent($DateOfAdmission, $EnrollNumber, $Firstname, $Lastname, $Email, $Phone, $Username, $Password);
        } else if ($Role == "admin"){
            signUpAdmin($Firstname, $Lastname, $DateOfBirth, $Email, $Phone, $Username, $Password);
        }
        
    
        header('location: ../../../public/login.php');
        //addStudent($DateOfAdmission, $EnrollNumber, $Firstname, $Lastname, $Email, $Phone);
        // Insert new record into the contacts table
        //$stmt = $pdo->prepare('INSERT INTO student (Firstname, Lastname, Email, Phone, EnrollNumber, DateOfAdmission) VALUES (?, ?, ?, ?, ?, ?)');
        //$stmt->execute([$Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission]);
    
        //pdo_deconnect_msql($pdo);
    }

?>