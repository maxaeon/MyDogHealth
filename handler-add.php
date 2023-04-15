<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Handler</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-SSlL99sDpE+1sG+nCoyv/QOFeDnX9zPbZpHtWkEZtRgFtWTwGhJq3rW2ptjQYafX9xlNcQ8zLWzs82vAVNUnyA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
​
<body>
​
  <!-- header part start
  <section id="header">
    <div class="hamburger-menu">
      <button class="hamburger-toggle"><a href="menu-1.html">
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
            <img src="images/account.png" class="rounded" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <h6>My Account Information </h6>
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
<legend>Register</legend>
<form name="frmHandler" method="post" action="handler-create.php">

<p>
<label for="fldhandlerFirstName">First Name</label>
<input type="text" class="form-control" name="txthandlerFirstName" id="txthandlerFirstName">
</p>
          <p>
          <label for="fldhandlerLastName">Last Name</label>
          <input type="text" class="form-control" name="txthandlerLastName" id="txthandlerLastName">
          </p>
      <p>
      <label for="fldhandlerEmail">Email*</label>
      <input type="text" class="form-control" name="txthandlerEmail" id="txthandlerEmail">
      </p>
      <p>
        <label for="fldhandlerPassword">Password*</label>
        <input type="password" class="form-control" name="txthandlerPassword" id="txthandlerPassword">
        </p>
                <p>
        <label for="fldhandlerPasswordConfirm">Confirm Password*</label>
        <input type="password" class="form-control" name="txthandlerPasswordConfirm" id="txthandlerPasswordCoonfirm">
        </p>
    <p>
    <label for="fldhandlerPhone">Phone <br>(xxx)xxx-xxxx</label>
    <input type="tel" class="form-control" name="txthandlerPhone" id="txthandlerPhone">
    </p>
    <p>
  <label for="fldhandlerAddress1">Address Line 1</label>
  <input type="text" class="form-control" name="txthandlerAddress1" id="txthandlerAddress1">
  </p>  <p>
  <label for="fldhandlerAddress2">Address Line 2</label>
  <input type="text" class="form-control" name="txthandlerAddress2" id="txthandlerAddress2">
  </p>  <p>
  <label for="fldhandlerAddress3">Address Line 3</label>
  <input type="text" class="form-control" name="txthandlerAddress3" id="txthandlerAddress3">
  </p>
                <p>
                <label for="fldhandlerNotes">Notes</label>
                <input type="text" class="form-control" name="txthandlerNotes" id="txthandlerNotes">
                </p>
                <p>'*' indicates a required field</p>
        
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
 <!--
<section>
 <div class="row m-0">
    <div class="col-lg-3 bottom-btn">
        <a href="dog-view.php">
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
    <a href="handler-view.php">
      <div class="text-center">
        <img src="images/handler.png" class="rounded" alt="...">
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
​-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
