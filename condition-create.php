<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

$txtconditionName = $_POST['txtconditionName'];
$txtconditionDateDiagnosed = $_POST['txtconditionDateDiagnosed'];
$txtconditionDoctor = $_POST['txtconditionDoctor'];
$txtconditionTreatment = $_POST['txtconditionTreatment'];
$txtconditionPrognosis = $_POST['txtconditionPrognosis'];
$txtconditionNotes = $_POST['txtconditionNotes'];

echo "Record to Insert";
// database insert SQL code
$sql = "INSERT INTO tbl_condition (fldconditionName, fldconditionDateDiagnosed, fldconditionDoctor, fldconditionTreatment, fldconditionPrognosis, fldconditionNotes) VALUES ('$txtconditionName','$txtconditionDateDiagnosed','$txtconditionDoctor','$txtconditionTreatment','$txtconditionPrognosis','$txtconditionNotes')";
echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Record Updated Successfully";
}



?>