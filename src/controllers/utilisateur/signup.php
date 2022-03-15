<?php
    include "../config.php";
    $pdo = pdo_connect_mysql();

    if (!empty($_POST)) {
        //$Firstname = $_POST['Firstname'] ?? '';
        $Firstname = $_POST['firstname'];
        $Lastname = $_POST['lastname'];
        $DateOfBirth = $_POST['dateOfbirth'];
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $EnrollNumber = $_POST['enrollNumber'];
        $DateOfAdmission = $_POST['dateOfAdmission'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
    
        
    
    
        // if(in_array(false, $fieldsStats)) {
        //     die("Format inforret");
        // }
    
        // addStudent($DateOfAdmission, $EnrollNumber, $Firstname, $Lastname, $Email, $Phone);
        // Insert new record into the contacts table
        //$stmt = $pdo->prepare('INSERT INTO student (Firstname, Lastname, Email, Phone, EnrollNumber, DateOfAdmission) VALUES (?, ?, ?, ?, ?, ?)');
        //$stmt->execute([$Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission]);
    
        //pdo_deconnect_msql($pdo);
    }

?>