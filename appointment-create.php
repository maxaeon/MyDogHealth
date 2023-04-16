<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');
$txtappointmentTitle = $_POST['txtappointmentTitle'];
$txtappointmentLocation = $_POST['txtappointmentLocation'];
$txtappointmentContact = $_POST['txtappointmentContact'];
$txtappointmentTime = $_POST['txtappointmentTime'];
$txtappointmentRequiredDocs = $_POST['txtappointmentRequiredDocs'];
$txtappointmentCost = $_POST['txtappointmentCost'];
$txtappointmentVaccination = $_POST['txtappointmentVaccination'];
$txtappointmentNotes = $_POST['txtappointmentNotes'];
$txtappointmentDog = $_POST['txtappointmentDog'];



// database insert SQL code
$sql = "INSERT INTO tbl_appointment (fldappointmentTitle, fldappointmentLocation, fldappointmentContact, fldappointmentTime, fldappointmentRequiredDocs, fldappointmentCost, fldappointmentVaccination, fldappointmentNotes, fldappointmentDog, fldappointmentHandler) VALUES ('$txtappointmentTitle', '$txtappointmentLocation', '$txtappointmentContact', '$txtappointmentTime', '$txtappointmentRequiredDocs', '$txtappointmentCost', '$txtappointmentVaccination', '$txtappointmentNotes', '$txtappointmentDog', '')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include("appointment-view.php");
	
}else{

}



?>