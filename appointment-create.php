<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txtappointmentTitle = $_POST['txtappointmentTitle'];
$txtappointmentLocation = $_POST['txtappointmentLocation'];
$txtappointmentContact = $_POST['txtappointmentContact'];
$txtappointmentTime = $_POST['txtappointmentTime'];
$txtappointmentRequiredDocs = $_POST['txtappointmentRequiredDocs'];
$txtappointmentCost = $_POST['txtappointmentCost'];
$txtappointmentNotes = $_POST['txtappointmentNotes'];


echo "Record to Insert";
// database insert SQL code
$sql = "INSERT INTO tbl_appointment (fldappointmentTitle, fldappointmentLocation, fldappointmentContact, fldappointmentTime, fldappointmentRequiredDocs, fldappointmentCost, fldappointmentNotes) VALUES ('$txttxtappointmentTitle', '$txttxtappointmentLocation', '$txttxtappointmentContact', '$txttxtappointmentTime', '$txttxtappointmentRequiredDocs', '$txttxtappointmentCost', '$txttxtappointmentNotes')";
echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Record Updated Successfully";
}



?>