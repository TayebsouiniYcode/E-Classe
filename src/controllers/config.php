<?php

function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'e_classe_db_V13';
    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $dsn = "mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME;charset=UTF8";
        return new PDO($dsn, $DATABASE_USER, $DATABASE_PASS, $options);
    } catch (PDOException $exception) {
        exit('Erreur de connection : ' . $exception->getMessage());
    }
}

function pdo_deconnect_msql($connexion) {
    $cnx = null;
}

function numberOfElement($tableName) {
    $pdo = pdo_connect_mysql();
    return $pdo->query("SELECT COUNT(*) FROM $tableName")->fetchColumn();
}



function addUtilisateur($Firstname, $Lastname, $DateOfBirth, $Username, $Password, $Fk_Student, $Phone, $Email){
    $pdo = pdo_connect_mysql();
    
    $statment = $pdo->prepare('INSERT INTO utilisateurs (Firstname, Lastname, DateOfbirth, Username, Password, Fk_Student, Phone, Email) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $statment->execute(array($Firstname, $Lastname, $DateOfBirth, $Username, $Password, $Fk_Student, $Phone, $Email));
    $pdo = null;
}

function addStudent($DateOfAdmission, $EnrollNumber, $Firstname, $Lastname, $Email, $Phone) {
    $pdo = pdo_connect_mysql();

    $stmt = $pdo->prepare('INSERT INTO students (DateOfAdmission, EnrollNumber) VALUES (?, ?)');
    $stmt->execute(array($DateOfAdmission, $EnrollNumber));
    $lastId = $pdo->lastInsertId();

    $DefaultUsername = $Firstname . $Lastname . $lastId;

    addUtilisateur($Firstname, $Lastname, '1994-02-04', $DefaultUsername, '123', $lastId, $Phone, $Email);
    $pdo = null;
}

function signUpStudent($DateOfAdmission, $EnrollNumber, $Firstname, $Lastname, $Email, $Phone, $Username, $Password) {
    $pdo = pdo_connect_mysql();

    $stmt = $pdo->prepare('INSERT INTO students (DateOfAdmission, EnrollNumber) VALUES (?, ?)');
    $stmt->execute(array($DateOfAdmission, $EnrollNumber));
    $lastId = $pdo->lastInsertId();

    $DefaultUsername = $Firstname . $Lastname . $lastId;

    addUtilisateur($Firstname, $Lastname, $DateOfBirth, $Username, $Password, $lastId, $Phone, $Email);
    $pdo = null;
}


function signUpAdmin($Firstname, $Lastname, $DateOfBirth, $Email, $Phone, $Username, $Password){
    $pdo = pdo_connect_mysql();

    $statment = $pdo->prepare('INSERT INTO utilisateurs (Firstname, Lastname, DateOfbirth, Username, Password, Fk_Admin, Phone, Email) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $statment->execute(array($Firstname, $Lastname, $DateOfBirth, $Username, $Password, 1, $Phone, $Email));
    
    $pdo = null;
}
//addStudent('2022-09-09' , '356457547453');
function getStudents() {
    $pdo = pdo_connect_mysql();
    $stmt = $pdo->prepare('SELECT * FROM students s, utilisateurs u where s.Id_Student = u.Fk_Student');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getStudentById($id) {
    $pdo = pdo_connect_mysql();
    $query = "SELECT * FROM students s, utilisateurs u where s.Id_Student = $id and u.Fk_Student = s.Id_Student";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetch();
}

function updateStudent($Firstname, $Lastname, $Email, $Phone, $EnrollNumber, $DateOfAdmission, $Id_Student) {
    try {
        $pdo = pdo_connect_mysql();
        //$query = "UPDATE utilisateurs, students SET utilisateurs.Firstname='$Firstname', utilisateurs.Lastname='$Lastname', utilisateurs.Email='$Email', utilisateurs.Phone='$Phone' , students.DateOfAdmission='$DateOfAdmission' student.EnrollNumber='$EnrollNumber' WHERE utilisateurs.Fk_Student = $Id_Student and students.Id_Student=$Id_Student";
        $query = "UPDATE utilisateurs SET Firstname='$Firstname', Lastname='$Lastname', Email='$Email', Phone='$Phone' WHERE Fk_Student = $Id_Student";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $query = "UPDATE students SET DateOfAdmission='$DateOfAdmission', EnrollNumber='$EnrollNumber' WHERE Id_Student = $Id_Student";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    } catch (Exception $e) {
        return $e->getMessage();
    } finally {
        $pdo = null;
    }
}

function deleteStudent($Id_Student) {
    $pdo = pdo_connect_mysql();
    $query = "DELETE FROM students WHERE Id_Student=$Id_Student";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $pdo = null;
}

function getCourses() {
    $pdo = pdo_connect_mysql();
    $stmt = $pdo->prepare('SELECT * FROM courses');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function login($Username, $Password){
    $pdo = pdo_connect_mysql();

    $query = "SELECT * FROM utilisateurs WHERE Username='$Username' and Password='$Password'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $pdo = null;
    $stmt->setFetchMode(PDO::FETCH_ASSOC); // $stmt->fetch(PDO::FETCH_ASSOC);

    return $stmt->fetch();
}

function getPaymentDetails() {
    $pdo = pdo_connect_mysql();
    $stmt = $pdo->prepare('SELECT Firstname, Lastname, PaymentShedule, BillNumber, AmountPaid, Date FROM payment_details p, utilisateurs u WHERE p.Fk_Student = u.Fk_Student');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}