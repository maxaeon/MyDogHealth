<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_appointment";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "</tr>";
    echo "<td> Appointment Title:</td>";
    echo "<td>" . $row['fldappointmentTitle'] . "</td>";
    echo "</tr>";
    echo "<td>  Location:</td>";
    echo "<td>" . $row['fldappointmentLocation'] . "</td>";
    echo "</tr>";
    echo "<td> Contact :</td>";
    echo "<td>" . $row['fldappointmentContact'] . "</td>";
    echo "</tr>";
    echo "<td> Time:</td>";
    echo "<td>" . $row['fldappointmentTime'] . "</td>";
    echo "</tr>";
    echo "<td> Required Documents and Materials:</td>";
    echo "<td>" . $row['fldappointmentRequiredDocs'] . "</td>";
    echo "</tr>";
    echo "<td> Cost:</td>";
    echo "<td>" . $row['fldappointmentCost'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldappointmentNotes'] . "</td>";


    
    echo "</tr>";
  }
  $conn->close();
?>
