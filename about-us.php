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
            <li class="nav-item" aria-current="page">
              <a class="nav-link active" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.php">Services</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Portfolio
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./commercial.php">Commercial</a></li>
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

  <section style="margin-top: 5rem; min-height: 85vh;" class="px-2 px-lg-4">
    <h5 class="fw-light">ABOUT US</h5>
    <div id="trust" class="mt-5 d-flex flex-wrap gap-3 align-items-center justify-content-center">
      <div class="card" style="width: 20rem; height: 23rem;">
        <img src="./assets-users/asset-15.jpeg" class="card-img-top h-50" alt="...">
        <div class="card-body fw-light">
          <span class="fs-5 card-title d-block">BUILD TRUST</span>
          <small class="card-text text-secondary d-block">
            We serve our clients by maintaining a moderate work load that allows us to fully commit resources, including
            our company's principals, to serving our clients by insuring the success of our client's projects.
          </small>
        </div>
      </div>
      <div id="quality" class="card" style="width: 20rem; height: 23rem;">
        <img src="./assets-users/asset-13.jpeg" class="card-img-top h-50" alt="...">
        <div class="card-body fw-light">
          <span class="fs-5 card-title d-block">BUILD QUALITY</span>
          <small class="card-text text-secondary d-block">
            Our great reputation is founded on our reliability, trust, and, above all, our integrity. We honor our
            commitments and believe strongly that good old-fashioned “keeping your word” is what makes us different.
          </small>
        </div>
      </div>
      <div id="community" class="card" style="width: 20rem; height: 23rem;">
        <img src="./assets-users/asset-14.jpeg" class="card-img-top h-50" alt="...">
        <div class="card-body fw-light">
          <span class="fs-5 card-title d-block">BUILD COMMUNITY</span>
          <small class="card-text text-secondary d-block">
            We take pride in our community and always have. Not only do we do business here, we live here. The is our
            home and our community is very important to us so we take an active part in making it better.
          </small>
        </div>
      </div>
    </div>
  </section>

  <footer class="mt-5 py-3 text-center text-white">
    <span>© 2022 FUTURISTIC PROFESSIONALS CONSTRUCTION INT'L SERVICES LTD. • All rights reserved.</span>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>