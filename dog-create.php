<?php

  include 'db.php';

  $txtdogHandler = $_POST['flddogHandler'];
  $txtdogName = $_POST['flddogName'];
  $txtdogDOB = $_POST['flddogDOB'];
  $txtdogAgeInYears= $_POST['flddogAgeInYears'];
  $txtdogBreed = $_POST['flddogBreed'];
  $txtdogSex = $_POST['flddogSex'];
  $txtdogWeightInPounds = $_POST['flddogWeightInPounds'];
  $txtdogSterilized = $_POST['flddogSterilized'];
  $txtdogMicrochip = $_POST['flddogMicrochip'];
  $txtdogNotes = $_POST['flddogNotes'];

  // database insert SQL code
  $sql = "INSERT INTO tbl_dog (flddogHandler, flddogName, flddogDOB, flddogAgeInYears, flddogBreed, fldDogSex, flddogWeightInPounds, flddogSterilized, flddogMicrochip, flddogNotes) VALUES ('$txtdogHandler', '$txtdogName', '$txtdogDOB', '$txtdogAgeInYears', '$txtdogBreed', '$txtdogSex', '$txtdogWeightInPounds', '$txtdogSterilized', '$txtdogMicrochip', '$txtdogNotes')";
  echo $sql;
  // insert in database 
  //$rs = mysqli_query($con, $sql);
  
  //if($rs)
  //{
  //    echo "Dog Record Updated Successfully";
 // }
  $conn->query($sql);
  $conn->close();

  header("location: index.php");
?>