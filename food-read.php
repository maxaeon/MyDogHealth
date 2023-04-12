<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_food";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {



    echo "</tr>";
    echo "<td> <b>Food Name:</td>";
    echo "<td>" . $row['fldfoodName'] . "</td>";
    echo "</tr>";
    echo "<td> Brand:</td>";
    echo "<td>" . $row['fldfoodBrand'] . "</td>";
    echo "</tr>";
    echo "<td> Amount:</td>";
    echo "<td>" . $row['fldfoodAmount'] . "</td>";
    echo "</tr>";
    echo "<td> Frequency:</td>";
    echo "<td>" . $row['fldfoodFrequency'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldfoodNotes'] . "</td>";
    echo "</tr>";
    echo "<td> Dogs Eating this Food:</td>";
    echo "<td>" . $row['fldfoodDog'] . "</td>";

   
    echo "</tr>";
  }
  $conn->close();
?>
