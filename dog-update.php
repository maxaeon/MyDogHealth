<?php
  include 'db.php';
  $txtDogId = $_POST['DogId'];
  $txtdogName = $_POST['flddogName'];
  $txtdogDOB = $_POST['flddogDOB'];
  $txtdogAgeInYears = $_POST['flddogAgeInYears'];
  $txtdogBreed = $_POST['flddogBreed'];
  $txtdogSex = $_POST['flddogSex'];
  $txtdogWeightInPounds = $_POST['flddogWeightInPounds'];
  $txtdogSterilized = $_POST['flddogSterilized'];
  $txtdogMicrochip = $_POST['flddogMicrochip'];
  $txtdogNotes = $_POST['flddogNotes'];

  $sql = "update tbl_dog set flddogName='$txtdogName', flddogDOB='$txtdogDOB', flddogAgeInYears= '$txtdogAgeInYears', flddogBreed= '$txtdogBreed', flddogSex= '$txtdogSex', flddogWeightInPounds= '$txtdogWeightInPounds', flddogSterilized= '$txtdogSterilized', flddogMicrochip= '$txtdogMicrochip', flddogNotes= '$txtdogNotes' where DogId=$DogId";
  $result = $conn->query($sql);
  $conn->close();
  //header("location: index.php");
?>