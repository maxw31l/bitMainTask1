<?php

session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
}

// Db Connect
require_once("../database/db_connect.php");

// Comment Delete
if ($_POST) {    try {
        $id = $_POST['id'];
        $comment = $_POST['comment'];
        $sql = "UPDATE comment_book SET comment = '$comment' WHERE id = '$id'";
        $query = $conn->prepare($sql);
        $result = $query->execute();
        if ($result) {
            header("Location: ../views/forum.php");
        }
    }
    catch (PDOException $e) {
        echo "Something is wrong " . $e->getMessage();    }
}
else {
    header("Location: ../");
}


?>