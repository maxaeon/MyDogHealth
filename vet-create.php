<?php
// database connection code
 $con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');
// get the post records
$txtvetClinic = $_POST['txtvetClinic'];
$txtvetAddress = $_POST['txtvetAddress'];
$txtvetAddress2 = $_POST['txtvetAddress2'];
$txtvetAddress3 = $_POST['txtvetAddress3'];
$txtvetPhone = $_POST['txtvetPhone'];
$txtvetEmail = $_POST['txtvetEmail'];
$txtvetDoctor = $_POST['txtvetDoctor'];
$txtvetDog = $_POST['txtvetDog'];
$txtvetNotes = $_POST['txtvetNotes'];

//echo "Vet Record Prior to Insertion";
// database insert SQL code
$sql = "INSERT INTO tbl_veterinarian (fldvetClinic, fldvetAddress, fldvetAddress2, fldvetAddress3, fldvetPhone, fldvetEmail, fldvetDoctor, fldvetDog, fldvetNotes, fldvetHandler) VALUES ('$txtvetClinic','$txtvetAddress', '$txtvetAddress2', '$txtvetAddress3', '$txtvetPhone', '$txtvetEmail', '$txtvetDoctor', '$txtvetDog', '$txtvetNotes', ' ')";
//echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	include("veterinarian-view.php");
}
?>