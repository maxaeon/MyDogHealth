<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txtappointmentTitle = $_POST['txtappointmentTitle'];
$txtappointmentDog = $_POST['txtappointmentDog'];
$txtappointmentLocation = $_POST['txtappointmentLocation'];
$txtappointmentContact = $_POST['txtappointmentContact'];
$txtappointmentTime = $_POST['txtappointmentTime'];
$txtappointmentRequiredDocs = $_POST['txtappointmentRequiredDocs'];
$txtappointmentCost = $_POST['txtappointmentCost'];
$txtappointmentNotes = $_POST['txtappointmentNotes'];



// database insert SQL code
$sql = "INSERT INTO tbl_appointment (fldappointmentTitle, fldappointmentLocation, fldappointmentContact, fldappointmentTime, fldappointmentRequiredDocs, fldappointmentCost, fldappointmentNotes, fldappointmentDog) VALUES ('$txtappointmentTitle', '$txtappointmentLocation', '$txtappointmentContact', '$txtappointmentTime', '$txtappointmentRequiredDocs', '$txtappointmentCost', '$txtappointmentNotes', '$txtappointmentDog')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include("appointment-view.php");
	
}else{

}



?>