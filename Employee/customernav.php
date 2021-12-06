 <?php
 function is_cust()
 {
   if (isset($_SESSION['cid']))
     return true;
 }
  
 ?>
 <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/c5e6a72524.js"></script>

<!--//////////////// Nav Start ////////////////-->

  
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <a class="navbar-brand" href="#">
      <img src="../assets/img/logo.png" width="95" height="55" alt="">
  </a>
    <a class="navbar-brand" href="#">TAILOR SHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../product.html">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../services.html">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact.html">Contact</a>
        </li>

        <?php 

if(is_cust()){

  ?>
        <li class="nav-item">
          <a class="nav-link" href="CustomerHome.php">Dashboard</a>
        </li>

        <?php
        }

      ?>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <?php 

        if(is_cust()){

          ?>

<a href="signout.php" class="get-started-btn scrollto">SIGN OUT</a>
          <?php

        }else{
          ?>
           <a href="../login.php" class="get-started-btn scrollto">LOGIN</a>

          <?php
        }

      ?>
      <!-- <a href="../login.php" class="get-started-btn scrollto">LOGIN</a>

      <a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a> -->

    </div>
  </nav>

  <!--//////////////// Nav End ////////////////-->