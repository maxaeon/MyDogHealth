<?php
// database connection code
 $con = mysqli_connect('localhost', 'myUser', 'myPasswd','myschema');
// get the post records
$txtvetClinic = $_POST['txtvetClinic'];
$txtvetAddress = $_POST['txtvetAddress'];
$txtvetPhone = $_POST['txtvetPhone'];
$txtvetEmail = $_POST['txtvetEmail'];
$txtvetDoctor = $_POST['txtvetDoctor'];
$txtvetDog = $_POST['txtvetDog'];
$txtvetNotes = $_POST['txtvetNotes'];

echo "Vet Record Prior to Insertion";
// database insert SQL code
$sql = "INSERT INTO tbl_veterinarian (fldvetClinic, fldvetAddress, fldvetPhone, fldvetEmail, fldvetDoctor, fldvetDog, fldvetNotes) VALUES ('$txtvetClinic','$txtvetAddress', '$txtvetPhone', '$txtvetEmail', '$txtvetDoctor', '$txtvetDog', '$txtvetNotes' )";
echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Vet Record Updated Successfully";
}
?>