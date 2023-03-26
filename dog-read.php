<?php
// database connection code
include 'db.php';
  $sql = "select * from tbl_dog";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if (isset($_POST["DogId"])){
    if ($row['DogId'] == $_GET['DogId']) {
        echo '<form class="form-inline m-2" action="dog-update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="dogname" value="'.$row['flddogName'].'"></td>';
        echo '<td><input type="number" class="form-control" name="dogDOB" value="'.$row['flddogDOB'].'"></td>';
        echo '<td><input type="text" class="form-control" name="dogageinyears" value="'.$row['flddogAgeInYears'].'"></td>';
        echo '<td><input type="text" class="form-control" name="dogbreed" value="'.$row['flddogBreed'].'"></td>';
        echo '<td><input type="text" class="form-control" name="dogsex" value="'.$row['fldDogSex'].'"></td>';
        echo '<td><input type="text" class="form-control" name="dogweightinpounds" value="'.$row['flddogWeightInPounds'].'"></td>';
        echo '<td><input type="text" class="form-control" name="dogsterilized" value="'.$row['flddogSterilized'].'"></td>';
        echo '<td><input type="text" class="form-control" name="dogmicrochip" value="'.$row['flddogMicrochip'].'"></td>';
        echo '<td><input type="text" class="form-control" name="dognotes" value="'.$row['flddogNotes'].'"></td>';

        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="DogId" value="'.$row['DogId'].'">';
        echo '</form>';
      }} else {

    echo "<td>" . $row['flddogName'] . "</td>";
    echo "<td>" . $row['flddogDOB'] . "</td>";
    echo "<td>" . $row['flddogAgeInYears'] . "</td>";
    echo "<td>" . $row['flddogBreed'] . "</td>";    
    echo "<td>" . $row['flddogSex'] . "</td>";
    echo "<td>" . $row['flddogWeightInPounds'] . "</td>";    
    echo "<td>" . $row['flddogSterilized'] . "</td>";
    echo "<td>" . $row['flddogMicrochip'] . "</td>";    
    echo "<td>" . $row['flddogNotes'] . "</td>";

   // echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['DogId'] . '" role="button">Update</a></td>';
      }
    //echo '<td><a class="btn btn-danger" href="dog-delete.php?id=' . $row['DogId'] . '" role="button">Delete</a></td>';
    echo '<td><a class="btn btn-primary" href="medication-view.php?id=' . $row['DogId'] . '" role="button">Medications</a></td>';
    echo '<td><a class="btn btn-primary" href="food-view.php?id=' . $row['DogId'] . '" role="button">Food</a></td>';
    echo '<td><a class="btn btn-primary" href="condition-view.php?id=' . $row['DogId'] . '" role="button">Health History</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>