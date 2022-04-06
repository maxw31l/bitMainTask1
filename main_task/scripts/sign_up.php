<?php

//! connect database
session_start();
require_once("../database/db_connect.php");
$_SESSION['status'] = 0; //if not logged in
$_SESSION['reg_errors'] = [];

if($_POST){
    $nickName = $_POST['nickName'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['cPassword'];
} else {
    header("Location: ../views/register.php");
    die;
}

if (!$_POST) {
    header("Location: ../views/register.php");
}

if(!(isset($_POST['nickName']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cPassword']))) {
    echo "Something is wrong, contact administrator";
}

$_SESSION['nickName'] = $nickName = $_POST['nickName'];
$_SESSION['firstName'] = $firstName = $_POST['firstName'];
$_SESSION['lastName'] = $lastName = $_POST['lastName'];
$_SESSION['email'] = $email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['cPassword'];




if (($nickName=="" || $firstName=="" || $lastName=="" || $email=="" || $password=="" || $confirmPassword=="")) {
    array_push($_SESSION['reg_errors'], "Please don't leave field empty");
}

if(strlen($nickName)>50){
    array_push($_SESSION['reg_errors'], "NickName is too long. MAX 50 symbols");
}

if(strlen($firstName)>50){
    array_push($_SESSION['reg_errors'], "First Name is too long. MAX 50 symbols");
}

if(strlen($lastName)>50){
    array_push($_SESSION['reg_errors'], "Last Name is too long. MAX 50 symbols");
}

if(strlen($email)>50){
    array_push($_SESSION['reg_errors'], "Email is too long. MAX 50 symbols");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($_SESSION['reg_errors'], "Email format is invalid");
}

if($password==$confirmPassword){
    $password = password_hash($password, PASSWORD_BCRYPT);
} else {
    array_push($_SESSION['reg_errors'], "Passwords do not match!");
}

if(!empty($_SESSION['reg_errors'])){
    header("Location: ../views/register.php");
    die;
}

//! inserting data to database

try {
$sql = "INSERT INTO users (nickName, firstName, lastName, email, password) VALUES ('$nickName', '$firstName', '$lastName', '$email', '$password')";
$query = $conn->prepare($sql);
$query->execute();
header("Location: ../views/login.php");
} catch (PDOException $e){
echo "Failed: ". $e->getMessage();
header("Location: ../views/register.php");
} 

?>
