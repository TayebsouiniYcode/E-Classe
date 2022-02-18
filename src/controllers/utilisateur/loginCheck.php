<?php
include "../config.php";

$res = login($_POST['Username'], $_POST['Password']);

if($res['Cmpt_Valid'] == 1) {
    if($res['Id_Utilisateur'] > 0) {

        session_start();

        $_SESSION['Firstname'] = $res['Firstname'];
        $_SESSION['Lastname'] = $res['Lastname'];
        $_SESSION['Id_Utilisateur'] = $res['Id_Utilisateur'];
        $_SESSION['Email'] = $res['Email'];

        if(isset($_POST['rememberMe'])) {
            setcookie('cUsername', $res['Username'], time() + 60 * 60, '/');
            setcookie('cPassword', $res['Password'], time() + 60 * 60, '/');
        }

        if($res['Fk_Admin'] != null) {
            $_SESSION['Role'] = "Admin";
            header('location: ../../../View/dashboard.php');
        } else if ($res['Fk_Student'] != null) {
            $_SESSION['Role'] = "Student";
            header('location: ../../../View/student.php');
        }


    }
} else if ($res['Cmpt_Valid'] == 0 && $res['Id_Utilisateur'] > 0) {
    header('location: ../../../public/login.php?msg=1');
} else  {
    header("location: ../../../public/login.php?msg=2");
}



?>