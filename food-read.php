<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_food";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "<td>" . $row['fldfoodName'] . "</td>";
    echo "<td>" . $row['fldfoodBrand'] . "</td>";
    echo "<td>" . $row['fldfoodAmount'] . "</td>";
    echo "<td>" . $row['fldfoodFrequency'] . "</td>";
    echo "<td>" . $row['fldfoodFavorite'] . "</td>";
    echo "<td>" . $row['fldfoodNotes'] . "</td>";



   
    echo "</tr>";
  }
  $conn->close();
?>