<?php

function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'e_classe_db';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!'. $exception->getMessage());
    }
}

function pdo_deconnect_msql($connexion) {
    $cnx = null;
}
/*
function connection() {
    // PDO Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "e_classe_db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        return "Connection failed: " . $e->getMessage();
    }
}

function close() {
    $conn = null;
}

*/