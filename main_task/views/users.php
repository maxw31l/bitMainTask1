<?php
session_start();

if(!isset($_SESSION['userid'])){
  header("Location: login.php");
} 

// Header + Db Connect
require_once("../database/db_connect.php");
include '../layout/header.php';
$_SESSION['status'] = 1;


try {
    $sql = "SELECT * FROM users ORDER BY updated DESC";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
} catch (PDOException $e) {
    echo "Select failed: ". $e->getMessage();
}


?>

<div class="card text-center text-light " style="width: 200px; height: 20px; opacity: 70%; margin: 15vh auto;">
  <div class="card-header bg-dark text-light" >
  Hello, <?php echo $_SESSION['nickname']; ?>
  </div>

</div>

<div class="position-relative" style="width: 75vw; height: 50vh; opacity: 80%; margin-left: 15vw; overflow-y: auto; ">
<table class="table table-dark table-striped  text-light " style="width: 950px; margin: 0 auto; ">

  </tr>
<thead>

<tr class="text-light text-center   border-light">
    <th scope="col">Nickname</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Email</th>
    <th scope="col">Created</th>
    <th scope="col">Updated</th>
    <th scope="col">Action</th>

</thead>
<?php 


foreach ($result as $user){

  if($user['id'] == $_SESSION['userid']) {
  echo "<tr><span><td>".$user['nickname']."</td><td>".$user['firstname']."</td><td>".$user['lastname']."</td><td>".$user['email']."</td><td>".$user['created']."</td><td>".$user['updated']."</td><td><a href='useredit.php?userid=".$user['id']. "'class='btn btn-success text-dark btn-block border-0'> Edit </a>&nbsp;&nbsp;<a href='../scripts/userdelete.php?id=".$user['id']."' class='btn-block btn btn-danger text-dark border-0'>Delete </a></td></tr>";
} else {
  echo "<tr><span><td>".$user['nickname']."</td><td>".$user['firstname']."</td><td>".$user['lastname']."</td><td>".$user['email']."</td><td>".$user['created']."</td><td>".$user['updated']."</td></tr>";
}

}


?>


</table>
</div>


<!-- Footer -->
<?php include '../layout/footer.php'; ?>
