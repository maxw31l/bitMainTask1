<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "forum";

try {
    $conn = new PDO ("mysql:host=$servername;dbname=$database", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected";
} catch(PDOException $e) {
echo "Failed fd: ".$e->getMessage();
}

?>















