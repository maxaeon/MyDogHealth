<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_medication";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "</tr>";
    echo "<td><b> Medication Name:</td>";
    echo "<td>" . $row['fldmedicationName'] . "</td>";
    echo "</tr>";
    echo "<td> Start Date:</td>";
    echo "<td>" . $row['fldmedicationStartDate'] . "</td>";
    echo "</tr>";
    echo "<td> End Date:</td>";
    echo "<td>" . $row['fldmedicationEndDate'] . "</td>";
    echo "</tr>";
    echo "<td> Dose:</td>";
    echo "<td>" . $row['fldmedicationDose'] . "</td>";
    echo "</tr>";
    echo "<td> Frequency:</td>";
    echo "<td>" . $row['fldmedicationFrequency'] . "</td>";
    echo "</tr>";
    echo "<td> Administration Method:</td>";
    echo "<td>" . $row['fldmedicationMethod'] . "</td>";
    echo "</tr>";
    echo "<td> Doctor(s):</td>";
    echo "<td>" . $row['fldmedicationDoctor'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldmedicationNotes'] . "</td>";
    echo "</tr>";
    echo "<td>Dogs on this Medication: </td>";
    echo "<td>" . $row['fldmedicationDog'] . "</td>";
    
    echo "</tr>";
  }
  $conn->close();
?>
