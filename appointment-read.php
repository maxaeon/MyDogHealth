<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_appointment";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "</tr>";
    echo "<td><br><b> Appointment Title:</td>";
    echo "<td><br><b>" . $row['fldappointmentTitle'] . "</td>";
    echo "</tr>";
    echo "<td>  Dogs:</td>";
    echo "<td>" . $row['fldappointmentDog'] . "</td>";
    echo "</tr>";
    echo "<td>  Location:</td>";
    echo "<td>" . $row['fldappointmentLocation'] . "</td>";
    echo "</tr>";
    echo "<td> Date:<br>(YYYY-MM-DD)</td>";
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
    echo "<td> Scheduled Vaccinations:</td>";
    echo "<td>" . $row['fldappointmentVaccination'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldappointmentNotes'] . "</td>";


    
    echo "</tr>";

    echo '<td><a class="btn btn-primary" href="issue.php" role="button">Update</a></td>';
  
echo '<td><a class="btn btn-danger" href="issue.php" role="button">Delete</a></td>';
}
  
  $conn->close();
?>
