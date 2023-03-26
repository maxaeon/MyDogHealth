<?php
// database connection code
 $con = mysqli_connect('localhost', 'myUser', 'myPasswd','db_dog');
// get the post records
$txtvetClinic = $_POST['txtvetClinic'];
$txtvetAddress = $_POST['txtvetAddress'];
$txtvetPhone = $_POST['txtvetPhone'];
$txtvetEmail = $_POST['txtvetEmail'];
$txtvetDoctor = $_POST['txtvetDoctor'];
$txtvetDog = $_POST['txtvetDog'];
$txtvetNotes = $_POST['txtvetNotes'];

echo "Vet Record to Insert";
// database insert SQL code
$sql = "INSERT INTO tbl_vet (fldvetClinic, fldvetAddress, fldvetPhone, fldvetEmail, fldvetDoctor, fldvetDog, fldvetNotes) VALUES ('$txtvetClinic','$txtvetAddress', '$txtvetPhone', '$txtvetEmail', '$txtvetDoctor', '$txtvetDog', '$txtvetNotes' )";
echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Vet Record Updated Successfully";
}
?>
