<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_veterinarian";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {


    echo "</tr>";
    echo "<td> <br><b>Clinic Name:</td>";
    echo "<td><br>" . $row['fldvetClinic'] . "</td>";
    echo "</tr>";
    echo "<td> Address Line 1:</td>";
    echo "<td>" . $row['fldvetAddress'] . "</td>";
    echo "</tr>";
        echo "<td> Address Line 2:</td>";
    echo "<td>" . $row['fldvetAddress2'] . "</td>";
    echo "</tr>";
        echo "<td> Address Line 3:</td>";
    echo "<td>" . $row['fldvetAddress3'] . "</td>";
    echo "</tr>";
    echo "<td> Phone:</td>";
    echo "<td>" . $row['fldvetPhone'] . "</td>";
    echo "</tr>";
    echo "<td> Email:</td>";
    echo "<td>" . $row['fldvetEmail'] . "</td>";
    echo "</tr>";
    echo "<td> Doctor:</td>";
    echo "<td>" . $row['fldvetDoctor'] . "</td>";
    echo "</tr>";
    echo "<td> Dog(s) in their Care:</td>";
    echo "<td>" . $row['fldvetDog'] . "</td>";
    echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldvetNotes'] . "</td>";
    echo "</tr>";

    echo '<td><a class="btn btn-primary" href="" role="button">Update</a></td>';

echo '<td><a class="btn btn-danger" href="" role="button">Delete</a></td>';
}
  $conn->close();
?>
