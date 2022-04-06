<?php

//  Header
include '../layout/header.php';

session_start();
if (isset($_SESSION['reg_errors'])) {
    foreach ($_SESSION['reg_errors'] as $error) {
       
    }
    $_SESSION['reg_errors'] = [];
}

$nickName = $firstName = $lastName = $email = "";

if(isset($_SESSION['nickName']) && isset($_SESSION['firstName']) && isset($_SESSION['firstName']) && isset($_SESSION['email'])){
  $nickName = $_SESSION['nickName'];
  $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
}
?>
<?php echo "<span style='font-size: 25px; color: white; position: absolute; margin-left: 52vw; margin-top: 1vh; width: 40vw; display: flex; justify-content: center;'>$error</span>"; ?>
<form action="../scripts/sign_up.php" method="POST">

 <div class=" position-absolute" style="margin-left: 50vh">
<div class="container py-5 col-12 border bg-dark border border-start-0 position-relative" style="opacity: 80%; margin-top: 60px; z-index: 100; margin-left: 40vh">

<h4 class="text-light text-center opacity-100 translate-middle" style="font-family: 'Bebas Neue', cursive; padding: 20px; border-bottom: 1px solid lightgrey; align-items: center; display: flex; height: 20px; padding-left: 50px">Registration Form </h4>

  <label for="exampleFormControlInput1" class="form-label "> </label>
  <input type="text" class="form-control bg-dark  text-light border-0" style="opacity: 90%;" id="exampleFormControlInput1" placeholder="Enter Nickname" name="nickName" value="<?php echo $nickName; ?>">
  
  <label for="exampleFormControlInput1" class="form-label text-center "></label>
  <input type="text" class="form-control text-light bg-dark  border-0 " style="opacity: 90%" id="exampleFormControlInput1" placeholder="Enter First name" name="firstName"  value="<?php echo $firstName; ?>">

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="text" class="form-control text-light bg-dark  border-0" style="opacity: 90%" id="exampleFormControlInput1" placeholder="Enter Last name" name="lastName" value="<?php echo $lastName; ?>">

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="email" class="form-control text-light  bg-dark   border-start-0 border-top-0 " style="opacity: 90%" id="exampleFormControlInput1" placeholder="Enter Email address" name="email" value="<?php echo $email; ?>">

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="password" class="form-control text-light bg-dark  border-0" style="opacity: 90%" id="exampleFormControlInput1"  id="exampleFormControlInput1" placeholder="Enter Password" name="password">

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="password" class="form-control text-light bg-dark border-0" style="opacity: 90%" id="exampleFormControlInput1"  id="exampleFormControlInput1" placeholder="Confirm Password" name="cPassword">

  <label for="button" class=""></label>
  <input type="submit" value="Register" class="form-control btn btn-dark text-secondary position-absolute  start-50 translate-middle text-light" style="opacity: 100%; margin-top: 50px; font-family: 'Bebas Neue', cursive; font-size: 20px; border-bottom: 1px solid lightgrey; padding-left: 10">


  </div>

  </div>
  </form>
<!-- Footer -->
  <?php
include '../layout/footer.php';
?>
