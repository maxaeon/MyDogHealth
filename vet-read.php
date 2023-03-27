<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_veterinarian";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "<td>" . $row['fldvetClinic'] . "</td>";
    echo "<td>" . $row['fldvetAddress'] . "</td>";
    echo "<td>" . $row['fldvetPhone'] . "</td>";
    echo "<td>" . $row['fldvetEmail'] . "</td>";
    echo "<td>" . $row['fldvetDoctor'] . "</td>";
    echo "<td>" . $row['fldvetDog'] . "</td>";
    echo "<td>" . $row['fldvetNotes'] . "</td>";

    echo '<td><a class="btn btn-primary" href="" role="button">Update</a></td>';  
    echo '<td><a class="btn btn-danger" href="" role="button">Delete</a></td>';

    
    echo "</tr>";

  }
  $conn->close();
?>
