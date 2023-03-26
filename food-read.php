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



   
    echo '<td><a class="btn btn-primary" href="medication-view.php?id=' . $row['DogId'] . '" role="button">Medications</a></td>';
    echo '<td><a class="btn btn-primary" href="food-view.php?id=' . $row['DogId'] . '" role="button">Food</a></td>';
    echo '<td><a class="btn btn-primary" href="condition-view.php?id=' . $row['DogId'] . '" role="button">Health History</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>