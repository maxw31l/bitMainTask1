<?php
session_start();
if(!isset($_SESSION['userid'])){
  header("Location: login.php");
}

// Db Connect
require_once("../database/db_connect.php");

// User Delete
if($_GET){
    try{
        $userid = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = '$userid'";
        $query = $conn->prepare($sql);
        $result = $query->execute();
        if($result){
            header("Location: ../views/users.php");
        }
    }catch(PDOException $e) {
        echo "Somethings wrong ". $e->getMessage();
    }
} else {
    header("Location: ../");
}



?>