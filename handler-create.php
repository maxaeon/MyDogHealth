<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txthandlerFirstName = $_POST['txthandlerFirstName'];
$txthandlerLastName = $_POST['txthandlerLastName'];
$txthandlerEmail = $_POST['txthandlerEmail'];
$txthandlerPassword = $_POST['txthandlerPassword'];
$txthandlerPasswordConfirm = $_POST['txthandlerPasswordConfirm'];
$txthandlerPhone = $_POST['txthandlerPhone'];
$txthandlerAddress1 = $_POST['txthandlerAddress1'];
$txthandlerAddress2 = $_POST['txthandlerAddress2'];
$txthandlerAddress3 = $_POST['txthandlerAddress3'];
$txthandlerNotes = $_POST['txthandlerNotes'];


// database insert SQL code
$sql = "INSERT INTO tbl_handler (fldhandlerFirstName, fldhandlerLastName, fldhandlerEmail, fldhandlerPassword, fldhandlerPasswordConfirm, fldhandlerPhone, fldhandlerAddress1, fldhandlerAddress2, fldhandlerAddress3, fldhandlerNotes) VALUES ( '$txthandlerFirstName', '$txthandlerLastName', '$txthandlerEmail', '$txthandlerPassword', '$txthandlerPasswordConfirm', '$txthandlerPhone', '$txthandlerAddress1', '$txthandlerAddress2','$txthandlerAddress3', '$txthandlerNotes')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	include("welcome.php");
}


?>
