<?php
include '../config.php';

$pdo = pdo_connect_mysql();
$msg = '';


if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('DELETE FROM student WHERE Id_Student = ?');
    $stmt->execute([$_GET['id']]);
    // User clicked the "No" button, redirect them back to the read page
    header('Location: ../../../view/student.php');
} else {
    exit('No ID specified!');
}
