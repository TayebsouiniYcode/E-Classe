<?php

if(isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_start();
    session_destroy();
    unset($_SESSION['Firstname']);
    unset($_SESSION['Lasttname']);
    unset($_SESSION['Role']);
    unset($_SESSION['Id_Utilisateur']);
    unset($_SESSION['Email']);
    header('location: ../../public/login.php');
}