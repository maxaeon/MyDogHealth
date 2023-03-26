<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txtmedicationName = $_POST['txtmedicationName'];
$txtmedicationStartDate = $_POST['txtmedicationStartDate'];
$txtmedicationEndDate = $_POST['txtmedicationEndDate'];
$txtmedicationDose = $_POST['txtmedicationDose'];
$txtmedicationFrequency = $_POST['txtmedicationFrequency'];
$txtmedicationMethod = $_POST['txtmedicationMethod'];
$txtmedicationDoctor = $_POST['txtmedicationDoctor'];
$txtmedicationNotes = $_POST['txtmedicationNotes'];

echo "Record to Insert";
// database insert SQL code
$sql = "INSERT INTO tbl_medication (fldmedicationName, fldmedicationStartDate, fldmedicationEndDate, fldmedicationDose, fldmedicationFrequency, fldmedicationMethod, fldmedicationDoctor, fldmedicationNotes) VALUES ('$txtmedicationName', '$txtmedicationStartDate', '$txtmedicationEndDate', '$txtmedicationDose', '$txtmedicationFrequency', '$txtmedicationMethod', '$txtmedicationDoctor', '$txtmedicationNotes')";
echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Record Updated Successfully";
}



?>