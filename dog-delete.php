<?php
  include 'db.php';
  if (isset($_POST["DogId"])){
  $DogId = $_GET['DogId'];
  $sql = "delete from 'tbl_dog' where 'tbl_dog'.'DogId'=$DogId";
  $conn->query($sql);}
  $conn->close();
 header("location: add-dog.php");
?>