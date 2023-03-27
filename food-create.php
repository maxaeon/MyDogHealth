<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txtfoodName = $_POST['txtfoodName'];
$txtfoodBrand = $_POST['txtfoodBrand'];
$txtfoodAmount = $_POST['txtfoodAmount'];
$txtfoodFrequency = $_POST['txtfoodFrequency'];
$txtfoodFavorite = $_POST['txtfoodFavorite'];
$txtfoodNotes = $_POST['txtfoodNotes'];

//echo "Record to Insert";
// database insert SQL code
$sql = "INSERT INTO tbl_food (fldfoodName, fldfoodBrand, fldfoodAmount, fldfoodFrequency, fldfoodFavorite, fldfoodNotes, fldfoodDog) VALUES ('$txtfoodName','$txtfoodBrand','$txtfoodAmount','$txtfoodFrequency','$txtfoodFavorite','$txtfoodNotes', ' ')";
//echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include("food-view.php");
}



?>