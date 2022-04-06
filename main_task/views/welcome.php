<?php
session_start();
if(!isset($_SESSION['userid'])){
  header("Location: login.php");
}

// Db Connect
require_once("../database/db_connect.php");

//  Welcome User
try {
  $sql = "SELECT * FROM forum_book WHERE email='$email'";
  $query = $conn->prepare($sql);
  $query->execute();
  $result = $query->fetch();
} catch(PDOException $e) {
  echo "fail ".$e->getMessage();
}





?>
