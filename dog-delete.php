<?php
  include 'db.php';
  $id = $_GET['id'];
  $sql = "delete from tbl_dog where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: home.php");
?>