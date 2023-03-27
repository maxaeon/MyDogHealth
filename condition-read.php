<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_condition";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "</tr>";
    echo "<td> Condition:</td>";
    echo "<td>" . $row['fldconditionName'] . "</td>";
    echo "</tr>";
    echo "<td> Date Diagnosed:</td>";
    echo "<td>" . $row['fldconditionDateDiagnosed'] . "</td>";
    echo "</tr>";
    echo "<td> Doctor:</td>";
    echo "<td>" . $row['fldconditionDoctor'] . "</td>";
    echo "</tr>";
    echo "<td> Treatment Plan:</td>";
        echo "<td>" . $row['fldconditionTreatment'] . "</td>";
        echo "</tr>";
    echo "<td> Prognosis:</td>";
    echo "<td>" . $row['fldconditionPrognosis'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldconditionNotes'] . "</td>";
  
    
   echo "</tr>";
    
  }
  $conn->close();
?>
