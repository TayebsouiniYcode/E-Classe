<?php

include "./components/header.php";

session_start();

echo 'Hello '. $_SESSION['Firstname'] . ' ' . $_SESSION['Lastname'] . ' Access Denied :)';

