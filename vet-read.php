<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_veterinarian";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "<td>" . $row['fldvetClinic'] . "</td>";
    echo "<td>" . $row['fldvetAddress'] . "</td>";
    echo "<td>" . $row['fldvetPhone'] . "</td>";
    echo "<td>" . $row['fldvetEmail'] . "</td>";
    echo "<td>" . $row['fldvetDoctor'] . "</td>";
    echo "<td>" . $row['fldvetDog'] . "</td>";
    echo "<td>" . $row['fldvetNotes'] . "</td>";



  }
  $conn->close();
?>