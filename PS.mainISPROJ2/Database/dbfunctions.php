<?php       // dbfunctions.inc.php
include_once 'dbconfig.php';

function connect_db() {
    global $servername, $dbname, $username, $password;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e) {
        echo "Error encountered: " . $e->getMessage();
        return NULL;
    }
}