<?php
include '../config.php';

if (isset($_GET['id'])) {
    deleteStudent($_GET['id']);
    header('Location: ../../../view/student.php');
} else {
    exit('No ID specified!');
}