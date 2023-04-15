<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dogs</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-SSlL99sDpE+1sG+nCoyv/QOFeDnX9zPbZpHtWkEZtRgFtWTwGhJq3rW2ptjQYafX9xlNcQ8zLWzs82vAVNUnyA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
​
<body>
​
  <!-- header part start -->
  <section id="header">
    <div class="hamburger-menu">
      <button class="hamburger-toggle"><a href="menu.html">
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span></a>
      </button>
    </div>
  </section>
  <!-- header part end -->
​

<section class="">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12"><br>
        <input type="button" value="Return to Previous Page" onclick="window.history.back()" /> 
<p><br></p></div>
      </div>
    </div>
  </section>

  <section class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <img src="images/dog.png" class="rounded" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <h3>My Dog Information</h3>
        </div>
      </div>
    </div>
  </section>


<section class="">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12">
<table class="table">
  <tbody>
    <?php include 'dog-read.php'; ?>
  </tbody>
</table>
</div>
</div>
</div>
</section>

<section>
<div class="container text-center">
      <div class="row">
       <div class="col-lg-12">

</tr><br><br>
<td><a class="btn btn-secondary" href="medication-view.php?id=' . $row['DogId'] . '" role="button">Medications</a></td>
<td><a class="btn btn-secondary" href="food-view.php?id=' . $row['DogId'] . '" role="button">Food</a></td>
<td><a class="btn btn-secondary" href="condition-view.php?id=' . $row['DogId'] . '" role="button">Health History</a></td>
</div>
      </div>
    </div>
</section>
  
<section class="">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
<h3><br><a href="dog-add.php">Add New</a><br>
</div>
      </div>
    </div>
  </section>


  <section>
  <div class="row m-0">
    <div class="col-lg-3 bottom-btn">
        <a href="welcome.php">
          <div class="text-center">
            <img src="images/home.png" class="rounded pt-3" alt="...">
          </div>
        </a>
    </div>
    <div class="col-lg-3 bottom-btn">
      <a href="appointment-view.php">
        <div class="text-center">
          <img src="images/appointment.png" class="rounded" alt="...">
        </div>
      </a>
  </div>
  <div class="col-lg-3 bottom-btn">
    <a href="veterinarian-view.php">
      <div class="text-center">
        <img src="images/veterinarian.png" class="rounded" alt="...">
      </div>
    </a>
</div>
<div class="col-lg-3 bottom-btn">
  <a href="Resources.html">
    <div class="text-center">
      <img src="images/add.png" class="rounded" alt="...">
    </div>
  </a>
</div>
  </div>
</section>
​
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
​
