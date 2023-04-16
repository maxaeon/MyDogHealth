<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_food";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {



    echo "</tr>";
    echo "<td><br> <b>Food Name:</td>";
    echo "<td><br>" . $row['fldfoodName'] . "</td>";
    echo "</tr>";
    echo "<td> Dogs Eating this Food:</td>";
    echo "<td>" . $row['fldfoodDog'] . "</td>";
    echo "</tr>";
    echo "<td> Brand:</td>";
    echo "<td>" . $row['fldfoodBrand'] . "</td>";
    echo "</tr>";
    echo "<td> Amount:</td>";
    echo "<td>" . $row['fldfoodAmount'] . "</td>";
    echo "</tr>";
    echo "<td> Frequency:</td>";
    echo "<td>" . $row['fldfoodFrequency'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldfoodNotes'] . "</td>";
    echo "</tr>";


   
    echo "</tr>";
    echo '<td><a class="btn btn-primary" href="issue.php" role="button">Update</a></td>';
 
echo '<td><a class="btn btn-danger" href="issue.php" role="button">Delete</a></td>';
  }
  $conn->close();
?>
