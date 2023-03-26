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


   
    
    echo "</tr>";
  }
  $conn->close();
?>