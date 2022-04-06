
<?php

//! connect database
require_once("../database/db_connect.php");
$_SESSION['status'] = 1; //if logged in

//! getting data from from and creating variables
// var_dump($_POST);
// die;
if($_POST){
    $comment = $_POST['comment'];
    $userid = $_POST['userid'];

} else {
    header("Location: ../views/forum.php");
    die;
}
//! inserting data to database
    try {
        $sql = "INSERT INTO comment_book (comment, userid) VALUES ('$comment', '$userid')";
        $query = $conn->prepare($sql);
        $query->execute();
        header("Location: ../views/forum.php");
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

    


?>