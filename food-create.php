<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txtfoodName = $_POST['txtfoodName'];
$txtfoodBrand = $_POST['txtfoodBrand'];
$txtfoodAmount = $_POST['txtfoodAmount'];
$txtfoodFrequency = $_POST['txtfoodFrequency'];
$txtfoodNotes = $_POST['txtfoodNotes'];
$txtfoodDog = $_POST['txtfoodDog'];

//echo "Record to Insert";
// database insert SQL code
$sql = "INSERT INTO tbl_food (fldfoodName, fldfoodBrand, fldfoodAmount, fldfoodFrequency, fldfoodNotes, fldfoodDog) VALUES ('$txtfoodName','$txtfoodBrand','$txtfoodAmount','$txtfoodFrequency', '$txtfoodNotes', '$txtfoodDog')";
//echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include("food-view.php");
}



?>