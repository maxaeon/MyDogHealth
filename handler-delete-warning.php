<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WARNING</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-SSlL99sDpE+1sG+nCoyv/QOFeDnX9zPbZpHtWkEZtRgFtWTwGhJq3rW2ptjQYafX9xlNcQ8zLWzs82vAVNUnyA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
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

<section class="">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12"><br>
        <input type="button" value="Return to Previous Page" onclick="window.history.back()" /> 
<p><br></p></div>
      </div>
    </div>
  </section>

  <section>
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <img src="images/caution.png" class="rounded" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="py-3">
    <div class="container">
        <div class="row">
           <div class="info">
            <p>Are you sure you want to delete your account? 

                If you select 'yes', your account information will be deleted, and you will be redirected to the login screen. 
                </p>
           </div>
           <div class="text-center py-3">
            <a href="login-register.php">
              <button type="button" class="btn btn-danger">Yes, Delete Account</button>
            </a>
          <a href="dog-view.php">
            <button type="button" class="btn btn-light">Cancel</button>
          </a>
          </div>
        </div>
    </div>
</section>



 <!-- footer part start -->
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
<!-- footer part end -->
  

  
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
