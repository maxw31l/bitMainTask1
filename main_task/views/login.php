<?php

include '../layout/header.php';
session_start();
if(isset($_SESSION['auth_errors'])){
    $errors = $_SESSION['auth_errors'];
    $_SESSION['auth_errors'] = [];
    foreach($errors as $error){
      
    }
}

$locked = false;

if(isset($_SESSION['login_count'])){
    if($_SESSION['login_count']===3){
        $locked=true;
    }
} else {
    $_SESSION['login_count'] = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main_Task</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
   
<div class="" style="width: 500px; margin: 30vh auto">
<form action="..\scripts\login.php" method="POST">
 
  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="text" class="form-control bg-dark bg-secondary text-light border-0" style="opacity: 80%" id="exampleFormControlInput1" placeholder="Enter Email address" name="email">

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="password" class="form-control bg-dark bg-secondary text-light border-0" style="opacity: 80%" id="exampleFormControlInput1" placeholder="Enter Password" name="password">

  <label for="button" class="align-items-center"></label>
  <input type="submit" value="Login" class="form-control btn btn-dark text-light position-absolute top-50 start-50 translate-middle border border-0" style="opacity: 90%; width: 200px; margin-top: 60px;font-family: 'Bebas Neue', cursive; font-size: 20px; border-style: none;">
  </form>


  <div style="font-weight: bold; position: absolute;  align-items: center; text-align: center;  width: 31vw; height: 5vh">
  <?php
echo "<span style='font-size: 25px; color: white;'>$error</span>";
?></div>

</div>
</body>
</html>

<?php


// Footer
include '../layout/footer.php';


?>