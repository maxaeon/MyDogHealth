<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txthandlerFirstName = $_POST['txthandlerFirstName'];
$txthandlerLastName = $_POST['txthandlerLastName'];
$txthandlerEmail = $_POST['txthandlerEmail'];
$txthandlerPassword = $_POST['txthandlerPassword'];
$txthandlerPhone = $_POST['txthandlerPhone'];
$txthandlerAddress = $_POST['txthandlerAddress'];

echo "Record to Insert";
// database insert SQL code
$sql = "INSERT INTO tbl_handler (fldhandlerFirstName, fldhandlerLastName, fldhandlerEmail, fldhandlerPassword, fldhandlerPhone, fldhandlerAddress) VALUES ( '$txthandlerFirstName', '$txthandlerLastName', '$txthandlerEmail', '$txthandlerPassword', '$txthandlerPhone', '$txthandlerAddress')";
echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Record Updated Successfully";
}


$rs = mysqli_query($con, $sql);

if($rs)
{
	include("condition-view.php");
}


?>