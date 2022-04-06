<?php
session_start();
if(!isset($_SESSION['userid'])){
  header("Location: login.php");
}
// Header + Db Connect
require_once("../database/db_connect.php");
include '../layout/header.php';

if($_GET){
    try {
        $userid = $_GET['userid'];
        $sql = "SELECT * FROM users WHERE id = '$userid'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->fetch();
    } catch(PDOException $e){
        echo "Select failed: ".$e->getMessage();
    }
}


?>

<!--  Form UserEdit -->
<form action="..\scripts\useredit.php" method="POST" >

<div class="container py-5 col-5">
  

<div class="position-absolute col-md-6 justify-content-center container py-4 start-50 top-50 translate-middle" style="width: 500px; opacity: 90%">
  <label for="exampleFormControlInput1" class="form-label "></label>
  <input type="text" class="form-control bg-dark text-center text-light" style="opacity: 90%" id="exampleFormControlInput1" placeholder="Enter Nickname" name="nickname" value="<?php echo $result['nickname'];?>">
  
  <label for="exampleFormControlInput1" class="form-label text-center "></label>
  <input type="text" class="form-control text-light bg-dark  border-50 text-center " style="opacity: 90%" id="exampleFormControlInput1" placeholder="Enter First name" name="firstname" value="<?php echo $result['firstname'];?>">

  <label for="exampleFormControlInput1" class="form-label text-center "></label>
  <input type="text" class="form-control text-light bg-dark  border-50 text-center " style="opacity: 90%" id="exampleFormControlInput1" placeholder="Enter Last name" name="lastname" value="<?php echo $result['lastname'];?>">

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="email" class="form-control text-light  bg-dark  border-50 text-center " style="opacity: 90%" id="exampleFormControlInput1" placeholder="Enter Email address" name="email" value="<?php echo $result['email'];?>">


  <label for="button" class=""></label>
  <input type="submit" value="Confirm change" class="form-control btn btn-dark text-light position-absolute top-100 start-50 translate-middle " style="opacity: 90%; width: 200px">

  <input type="hidden" name='userid' value="<?php echo $result['id'];?>">

  <input type="submit" value="Back" class="form-control btn btn-dark text-light position-absolute top-100 start-50 translate-middle " style="opacity: 90%; width: 200px; margin-top: 50px">
  </div>
  

  </form>
 
  </div>





























<?php include '../layout/footer.php'; ?>