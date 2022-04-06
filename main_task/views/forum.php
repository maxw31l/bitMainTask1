<?php
session_start();
if(!isset($_SESSION['userid'])){
  header("Location: login.php");
}

// Db Connect + Header
include '../layout/header.php';
require_once("../database/db_connect.php");

try{
  $sql = "SELECT c.comment, u.nickname, c.updated, c.userid, c.created, c.id
  FROM comment_book AS c
  JOIN users  AS u ON  c.userid = u.id
  ORDER BY updated DESC";
  $query = $conn->prepare($sql);
  $query->execute();
  $result = $query->fetchAll();
} catch (PDOException $e) {
  echo "Select failed: ". $e->getMessage();
}

?>

<!-- Forum view -->
<div class="container-lg py-5 bg-dark position-absolute translate-middle top-50 start-50" style="width: 65vw; height: 70vh; opacity: 100%; border-radius: 20px; margin-left: 200px; border-radius: 50px">

<form action="..\scripts\forum.php" method="POST" class="form-floating position-relative" style="width: 49vh; opacity: 100%; margin-left: 1.5vw">
<label  for="InputValue" style="height: 25px; justify-content: center; display:flex; align-items: center" class="">Type a comment</label>
  <input type="text" disabled class="form-control float-right " style="height:25px;  width: 150px;">

<textarea class="bg-secondary text-light" name="comment" rows="4" cols="48" style="border-radius: 5px; height:10vh; width: 60vw; resize: none"></textarea>

<div>
<input type="submit" value="Enter"  style=" width: 20vw; margin-left: 20vw; border-radius: 10px; height: 4vh;" class="bg-primary text-light border-0 position-absolute start-0 top-100" />
</div>

<input type="hidden" name="userid" value="<?php echo $_SESSION['userid'];?>">
</form>

<div class="container-lg py-4 bg-secondary position-absolute top-50 start-50 translate-middle table-striped  border-light text-light" style="height: 40vh; opacity: 100%; width: 60vw; margin-top: 10vh; border-radius: 10px; overflow-wrap: break-word; overflow-y:scroll; overflow-x: scroll;">
    
<table class=" " style="font-size: 20px;">



<?php



foreach ($result as $comment){

  if($comment['userid'] == $_SESSION['userid']) {
    echo "<tr><td><th><span style=' display: block; font-size: 10px; width: 5vw; color: orange;'>".$comment['created']."</span>".$comment['nickname']."</td></th><td style=' font-size: 10px; color: white; padding-top: 4vh;'>".$comment['comment']."</td><td><a style='width: 73px;' href='comment_edit.php?id=".$comment['id']. "'class='btn btn-success text-light; style='height: 3.2vh'> Edit </a> <a href='../scripts/comment_delete.php?id=".$comment['id']."' class='btn btn-danger text-light border-0;'>Delete </a></td></tr>";
  } else {
    echo "<tr><td><th><span style=' display: block; font-size: 10px; width: 5vw; color: orange; margin-top: 10px; '>".$comment['created']."</span>".$comment['nickname']."</td></th><td style=' font-size: 10px; color: white; padding-top: 4vh; width: 50vw'>".$comment['comment']."</td></tr>";
  }


  

}



?>
</table>
</div>
</div>

<!-- Footer -->
<?php include '../layout/footer.php'; ?>