<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_handler";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if (isset($_POST["HandlerId"])){
      if ($row['HandlerId'] == $_GET['HandlerId']) {
          echo '<form class="form-inline m-2" action="handler-update.php" method="POST">';
          echo '<td><input type="text" class="form-control" name="handlerFirstName" value="'.$row['fldhandlerFirstName'].'"></td>';
          echo '<td><input type="number" class="form-control" name="handerLastName" value="'.$row['fldhanderLastName'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerEmail" value="'.$row['fldhandlerEmail'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerPassword" value="'.$row['fldhandlerPassword'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerPhone" value="'.$row['fldhandlerPhone'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerAddress1" value="'.$row['fldhandlerAddress1'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerAddress2" value="'.$row['fldhandlerAddress2'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerAddress3" value="'.$row['fldhandlerAddress3'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerNotes" value="'.$row['fldhandlerNotes'].'"></td>';
  
          echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
          echo '<input type="hidden" name="HandlerId" value="'.$row['HandlerId'].'">';
          echo '</form>';
        }} else {

          echo "</tr>";
    echo "<td> First Name:</td>";
    echo "<td>" . $row['fldhandlerFirstName'] . "</td>";
                echo "</tr>";
    echo "<td> Last Name:</td>";
    echo "<td>" . $row['fldhandlerLastName'] . "</td>";
          echo "</tr>";
    echo "<td> Email:</td>";      
    echo "<td>" . $row['fldhandlerEmail'] . "</td>";
                echo "</tr>";
   echo "<td> Password:</td>";
    echo "<td>" . $row['fldhandlerPassword'] . "</td>";
                echo "</tr>";
    echo "<td> Phone:</td>";
    echo "<td>" . $row['fldhandlerPhone'] . "</td>";
                echo "</tr>";
    echo "<td> Address Line 1:</td>";
    echo "<td>" . $row['fldhandlerAddress1'] . "</td>";
                echo "</tr>";
                echo "<td> Address Line 2:</td>";
                echo "<td>" . $row['fldhandlerAddress2'] . "</td>";
                            echo "</tr>";
                            echo "<td> Address Line 3:</td>";
                            echo "<td>" . $row['fldhandlerAddress3'] . "</td>";
                                        echo "</tr>";
    echo "<td> Notes:</td>";
    echo "<td>" . $row['fldhandlerNotes'] . "</td>";

      }


    echo "<tr>";

echo '<td><a class="btn btn-primary" href="" role="button">Update</a></td>';

echo '<td><a class="btn btn-danger" href="handler-delete-warning.php" role="button">Delete</a></td>';}
  $conn->close();
?>