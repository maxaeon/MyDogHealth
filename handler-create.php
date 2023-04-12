<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txthandlerFirstName = $_POST['txthandlerFirstName'];
$txthandlerLastName = $_POST['txthandlerLastName'];
$txthandlerEmail = $_POST['txthandlerEmail'];
$txthandlerPassword = $_POST['txthandlerPassword'];
$txthandlerPasswordConfirm = $_POST['txthandlerPasswordConfirm'];
$txthandlerPhone = $_POST['txthandlerPhone'];
$txthandlerAddress = $_POST['txthandlerAddress'];
$txthandlerNotes = $_POST['txthandlerNotes'];


// database insert SQL code
$sql = "INSERT INTO tbl_handler (fldhandlerFirstName, fldhandlerLastName, fldhandlerEmail, fldhandlerPassword, fldhandlerPasswordConfirm, fldhandlerPhone, fldhandlerAddress, fldhandlerNotes) VALUES ( '$txthandlerFirstName', '$txthandlerLastName', '$txthandlerEmail', '$txthandlerPassword', '$txthandlerPasswordConfirm', '$txthandlerPhone', '$txthandlerAddress', '$txthandlerNote')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	include("welcome.php");
}


?>
