<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_dog";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";

      echo "<td><b> Dog Name:</td>";
        echo "<td>" . $row['flddogName'] . "</td>";
        echo "</tr>";
        
   // echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['DogId'] . '" role="button">Update</a></td>';
      }
    //echo '<td><a class="btn btn-danger" href="dog-delete.php?id=' . $row['DogId'] . '" role="button">Delete</a></td>';

  

  
  $conn->close();
?>