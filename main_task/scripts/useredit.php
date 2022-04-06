<?php

session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
}

// Db Connect
require_once("../database/db_connect.php");

// User Edit
if ($_POST) {    try {
        $userid = $_POST['userid'];
        $nickname = $_POST['nickname'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET nickname = '$nickname', firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE id = '$userid'";
        $query = $conn->prepare($sql);
        $result = $query->execute();
        if ($result) {
            header("Location: ../views/users.php");
        }
    }
    catch (PDOException $e) {
        echo "Something is wrong " . $e->getMessage();    }
}
else {
    header("Location: ../");
}


?>