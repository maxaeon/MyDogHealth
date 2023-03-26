<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_vet";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "<td>" . $row['fldvetClinic'] . "</td>";
    echo "<td>" . $row['fldvetAddress'] . "</td>";
    echo "<td>" . $row['fldvetPhone'] . "</td>";
    echo "<td>" . $row['fldvetEmail'] . "</td>";
    echo "<td>" . $row['fldvetDoctor'] . "</td>";
    echo "<td>" . $row['fldvetDog'] . "</td>";
    echo "<td>" . $row['fldvetNotes'] . "</td>";


   
    echo '<td><a class="btn btn-primary" href="medication-view.php?id=' . $row['DogId'] . '" role="button">Medications</a></td>';
    echo '<td><a class="btn btn-primary" href="food-view.php?id=' . $row['DogId'] . '" role="button">Food</a></td>';
    echo '<td><a class="btn btn-primary" href="condition-view.php?id=' . $row['DogId'] . '" role="button">Health History</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>