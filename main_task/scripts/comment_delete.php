<?php
session_start();
if(!isset($_SESSION['userid'])){
  header("Location: login.php");
}
// dbConnect
require_once("../database/db_connect.php");

// Comment Delete
if($_GET){
    try{
        $id = $_GET['id'];
        $sql = "DELETE FROM comment_book WHERE id = '$id'";
        $query = $conn->prepare($sql);
        $result = $query->execute();
        if($result){
            header("Location: ../views/forum.php");
        }
    }catch(PDOException $e) {
        echo "Somethings wrong ". $e->getMessage();
    }
} else {
    header("Location: ../");
}



?>