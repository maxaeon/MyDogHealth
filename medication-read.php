<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_medication";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "<td>" . $row['fldmedicationName'] . "</td>";
    echo "<td>" . $row['fldmedicationStartDate'] . "</td>";
    echo "<td>" . $row['fldmedicationEndDate'] . "</td>";
    echo "<td>" . $row['fldmedicationDose'] . "</td>";
    echo "<td>" . $row['fldmedicationFrequency'] . "</td>";
    echo "<td>" . $row['fldmedicationMethod'] . "</td>";
    echo "<td>" . $row['fldmedicationDoctor'] . "</td>";
    echo "<td>" . $row['fldmedicationNotes'] . "</td>";


   
    echo '<td><a class="btn btn-primary" href="medication-view.php?id=' . $row['DogId'] . '" role="button">Medications</a></td>';
    echo '<td><a class="btn btn-primary" href="food-view.php?id=' . $row['DogId'] . '" role="button">Food</a></td>';
    echo '<td><a class="btn btn-primary" href="condition-view.php?id=' . $row['DogId'] . '" role="button">Health History</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>