<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_appointment";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "<td>" . $row['fldappointmentTitle'] . "</td>";
    echo "<td>" . $row['fldappointmentLocation'] . "</td>";
    echo "<td>" . $row['fldappointmentContact'] . "</td>";
    echo "<td>" . $row['fldappointmentTime'] . "</td>";
    echo "<td>" . $row['fldappointmentRequiredDocs'] . "</td>";
    echo "<td>" . $row['fldappointmentCost'] . "</td>";
    echo "<td>" . $row['fldappointmentNotes'] . "</td>";


   
    echo '<td><a class="btn btn-primary" href="medication-view.php?id=' . $row['DogId'] . '" role="button">Medications</a></td>';
    echo '<td><a class="btn btn-primary" href="food-view.php?id=' . $row['DogId'] . '" role="button">Food</a></td>';
    echo '<td><a class="btn btn-primary" href="condition-view.php?id=' . $row['DogId'] . '" role="button">Health History</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>