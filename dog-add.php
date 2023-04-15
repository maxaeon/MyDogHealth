<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Dog</title>
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
          <h6>My Dog Information</h6>
        </div>
      </div>
    </div>
  </section>
 
 <section>
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="info">
              <div class="text-center">
<fieldset>
<legend>Add Dog</legend>
<form name="frmDog" method="post" action="dog-create.php">

<p>
<label for="flddogName">Dog Name</label>
<input type="text" class="form-control" name="txtdogName" id="txtdogName">
</p>
<p>
  <label for="flddogDOB">Dog Date of Birth (YYYY/MM/DD)</label>
  <input type="date" class="form-control" name="txtdogDOB" id="txtdogDOB">
</p><p>
      <label for="flddogBreed">Dog Breed</label>
      <input type="text" class="form-control" name="txtdogBreed" id="txtdogBreed">
      </p><p>
        <label for="flddogSex">Dog Sex</label>
        <input type="boolean" class="form-control" name="txtdogSex" id="txtdogSex">
        </p><p>
          <label for="flddogWeightInPounds">Dog Weight (in Pounds unless otherwise specified)</label>
          <input type="text" class="form-control" name="txtdogWeightInPounds" id="txtdogWeightInPounds">
          </p><p>
            <label for="flddogSterilized">Spayed or Neutered?</label>
            <input type="boolean" class="form-control" name="txtdogSterilized" id="txtdogSterilized">
            </p><p>
              <label for="flddogMicrochip">Microchip?</label>
              <input type="text" class="form-control" name="txtdogMicrochip" id="txtdogMicrochip">
              </p><p>
                <label for="flddogNotes">Notes</label>
                <input type="text" class="form-control" name="txtdogNotes" id="txtdogNotes">
                </p>
        
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</div>
</div>
</div>
</div>
</section>

<section>
  <div class="row m-0">
    <div class="col-lg-3 bottom-btn">
        <a href="welcome.php">
          <div class="text-center">
            <img src="images/pawprinticon.png" class="rounded pt-3" alt="...">
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
