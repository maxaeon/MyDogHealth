<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_condition";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "<td>" . $row['fldconditionName'] . "</td>";
    echo "<td>" . $row['fldconditionDateDiagnosed'] . "</td>";
    echo "<td>" . $row['fldconditionDoctor'] . "</td>";
    echo "<td>" . $row['fldconditionTreatment'] . "</td>";
    echo "<td>" . $row['fldconditionPrognosis'] . "</td>";
    echo "<td>" . $row['fldconditionNotes'] . "</td>";

echo '<td><a class="btn btn-primary" href="" role="button">Update</a></td>';  
  echo '<td><a class="btn btn-danger" href="" role="button">Delete</a></td>';    
    
   echo "</tr>";
    
  }
  $conn->close();
?>
