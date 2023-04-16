<?php

$con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');

//$txtdogHandler = $_POST['flddogHandler'];
$txtdogName = $_POST['txtdogName'];
$txtdogDOB = $_POST['txtdogDOB'];
//$txtdogAgeInYears= $_POST['txtdogAgeInYears'];
$txtdogBreed = $_POST['txtdogBreed'];
$txtdogSex = $_POST['txtdogSex'];
$txtdogWeightInPounds = $_POST['txtdogWeightInPounds'];
$txtdogSterilized = $_POST['txtdogSterilized'];
$txtdogMicrochip = $_POST['txtdogMicrochip'];
$txtdogNotes = $_POST['txtdogNotes'];


//echo "Dog Record before Successfully";
// database insert SQL code
$sql = "INSERT INTO tbl_dog (flddogHandler, flddogName, flddogDOB, flddogBreed, fldDogSex, flddogWeightInPounds, flddogSterilized, flddogMicrochip, flddogNotes) VALUES ('', '$txtdogName', '$txtdogDOB', '$txtdogBreed', '$txtdogSex', '$txtdogWeightInPounds', '$txtdogSterilized', '$txtdogMicrochip', '$txtdogNotes')";
//echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include("dog-view.php");
}



?>