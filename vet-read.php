<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_veterinarian";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "</tr>";
    echo "<td> Clinic Name:</td>";
    echo "<td>" . $row['fldvetClinic'] . "</td>";
    echo "</tr>";
    echo "<td> Address:</td>";
    echo "<td>" . $row['fldvetAddress'] . "</td>";
    echo "</tr>";
    echo "<td> Phone:</td>";
    echo "<td>" . $row['fldvetPhone'] . "</td>";
    echo "</tr>";
    echo "<td> Email:</td>";
    echo "<td>" . $row['fldvetEmail'] . "</td>";
    echo "</tr>";
    echo "<td> Doctor:</td>";
    echo "<td>" . $row['fldvetDoctor'] . "</td>";
    echo "</tr>";
    echo "<td> Dog(s) in their Care:</td>";
    echo "<td>" . $row['fldvetDog'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldvetNotes'] . "</td>";
    echo "</tr>";

  }
  $conn->close();
?>
