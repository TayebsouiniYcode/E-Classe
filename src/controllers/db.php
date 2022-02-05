<?php
/*
$servername = "localhost";
$username = "root";
//$password = "";

try {
    $cnx = new PDO("mysql:host=$servername;dbname=eclasse", $username, "");
    // set the PDO error mode to exception
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$cnx = null;
*/
/*
finally {
    echo "this is simple smg for testing finaly";
}*/

$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "eclasse";

try {
    $cnx = new PDO("mysql:host=$servername;dbname=$dbname", $username, "");
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $cnx->prepare("SELECT * FROM student");
    $query->execute();

    // set the resulting array to associative
    $result = $query->setFetchMode(PDO::FETCH_ASSOC);
    var_dump($query->fetchAll());
    /*
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
    */
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

