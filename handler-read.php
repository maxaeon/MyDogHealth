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
          echo '<td><input type="text" class="form-control" name="handlerAddress" value="'.$row['fldhandlerAddress'].'"></td>';
          echo '<td><input type="text" class="form-control" name="handlerNotes" value="'.$row['fldhandlerNotes'].'"></td>';
  
          echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
          echo '<input type="hidden" name="HandlerId" value="'.$row['HandlerId'].'">';
          echo '</form>';
        }} else {

    echo "<td>" . $row['fldhandlerFirstName'] . "</td>";
    echo "<td>" . $row['fldhandlerLastName'] . "</td>";
    echo "<td>" . $row['fldhandlerEmail'] . "</td>";
    echo "<td>" . $row['fldhandlerPassword'] . "</td>";
    echo "<td>" . $row['fldhandlerPhone'] . "</td>";
    echo "<td>" . $row['fldhandlerAddress'] . "</td>";
    echo "<td>" . $row['fldhandlerNotes'] . "</td>";

      echo '<td><a class="btn btn-primary" href="handler-edit.php" role="button">Update</a></td>';
      }
      echo '<td><a class="btn btn-danger" href="handler-delete-warning.php" role="button">Delete</a></td>';

    echo "<tr>";

  }
  $conn->close();
?>