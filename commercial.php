<?php

include_once('./includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/assets-users/logo-bg.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/main.css">
  <link rel="stylesheet" href="./styles/lightgallery.css">
  <title>Futuristic Ltd.</title>
</head>

<body class="container-xxl px-0">
  <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
        <div class="d-flex align-items-center">
          <img id="logo" src="./assets-users/logo.png" alt="">
          <span class="fs-4 fw-bold">Futuristic LTD.</span>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Futuristic LTD.</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body text-uppercase">
          <ul class="navbar-nav nav-tabs justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about-us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.php">Services</a>
            </li>
            <li class="nav-item dropdown" aria-current="page">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Portfolio
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Commercial</a></li>
                <li><a class="dropdown-item" href="./videos.php">Videos</a></li>
                <!--  <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <section style="margin-top: 5rem;" class="px-2 px-lg-4">
    <h5 class="fw-light">COMMERCIAL</h5>
    <div class="mt-3">
    <div id="propertyPhotos" class="d-flex align-items-center flex-wrap demo-gallery">

    <?php 
        $query = "SELECT * FROM gallery";
        $select_categories = mysqli_query($con,$query);
        $cnt=1;
        while($row = mysqli_fetch_assoc($select_categories)){ 
        
            ?>
           
    <?php echo  "<div  data-src='./admin/images/gallery/$row[img]' data-sub-html='CLICK THE TOP RIGHT CORNER TO EXIT GALLERY MODE' class='position-relative col-6 col-md-4 col-lg-3 p-1' style='height: 180px;'>" ?>
          <a href="">
            <?php   echo  "<img src='./admin/images/gallery/$row[img]' alt ='image'>" ?>
          </a>
      </div>
   <?php } ?>


      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
  <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
  <script>
    var propertyPhotos = document.getElementById('propertyPhotos')
    lightGallery(propertyPhotos)
  </script>
</body>

</html>