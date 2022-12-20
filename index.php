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
      <a class="navbar-brand" href="javascript:void(0)">
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about-us.php">About Us</a>
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

  <section class="hero">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active position-relative" data-bs-interval="1000000">
          <img src="./assets-users/asset-10.jpeg" class="d-block w-100" alt="...">
          <div style="left: 0;" class="position-absolute h-100 w-100 bg-dark bg-opacity-75 top-0">
            <div
              class="col-8 mt-4 mt-md-0 col-md-12 mx-auto d-flex flex-column text-white align-items-center justify-content-center h-100 text-center">
              <i style="color: #0dcaf091;" class="mb-3">Greetings</i>
              <h2>HELLO, WE ARE FUTURISTIC </h2>
              <i class="btn btn-info rounded-5 text-white">Let's build the future together.</i>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./assets-users/asset-6.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./assets-users/asset-7.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./assets-users/asset-4.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets-users/asset-5.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <article class="pb-3">
    <section style="padding-top: 20rem;" class="build text-center">
      <h2 style="margin-top: -16rem;" class="fw-light text-light">SERVING NIGERIA GLOBALLY</h2>
    </section>
    <div style="margin-top: -10rem;" class="d-flex flex-wrap gap-3 align-items-center justify-content-center">
      <div class="card" style="width: 20rem; height: 20rem;">
        <img src="./assets-users/asset-15.jpeg" class="card-img-top h-50" alt="...">
        <div class="card-body fw-light">
          <span class="fs-5 card-title d-block">BUILD TRUST</span>
          <small class="card-text text-secondary d-block">We handle each project as if it were our own.</small>
          <a href="./about-us.php#trust" style="text-decoration: none;" class="read-more d-inline-block">Read More</a>
        </div>
      </div>
      <div class="card" style="width: 20rem; height: 20rem;">
        <img src="./assets-users/asset-13.jpeg" class="card-img-top h-50" alt="...">
        <div class="card-body fw-light">
          <span class="fs-5 card-title d-block">BUILD QUALITY</span>
          <small class="card-text text-secondary d-block">We begin each project with the end in mind.</small>
          <a href="./about-us.php#quality" style="text-decoration: none;" class="read-more d-inline-block">Read
            More</a>
        </div>
      </div>
      <div class="card" style="width: 20rem; height: 20rem;">
        <img src="./assets-users/asset-14.jpeg" class="card-img-top h-50" alt="...">
        <div class="card-body fw-light">
          <span class="fs-5 card-title d-block">BUILD COMMUNITY</span>
          <small class="card-text text-secondary d-block">We strive to make a positive impact in our community.</small>
          <a href="./about-us.php#community" style="text-decoration: none;" class="read-more d-inline-block">Read
            More</a>
        </div>
      </div>
    </div>
  </article>
  <section id="feature" class="py-3">
    <h5 class="ps-4 fw-light text-white">FEATURED WORK</h5>
    <div class=" mt-4">
      <div class="features-container">
        <div class="features-image position-relative mx-2 d-inline-block">
          <img src="./assets-users/asset-2.jpeg" alt="" class="w-100 h-100">
          <a href="#" style="left: 0;"
            class="hover-features text-decoration-none w-100 h-100 position-absolute bg-dark bg-opacity-50 top-0">
            <div class="text-white text-center d-flex align-items-center h-100 justify-content-center">
              <span>Featured works</span>
            </div>
          </a>
        </div>
        <div class="features-image position-relative mx-2 d-inline-block">
          <img src="./assets-users/asset-12.jpeg" alt="" class="w-100 h-100">
          <a href="#" style="left: 0;"
            class="hover-features text-decoration-none w-100 h-100 position-absolute bg-dark bg-opacity-50 top-0">
            <div class="text-white text-center d-flex align-items-center h-100 justify-content-center">
              <span>Featured works</span>
            </div>
          </a>
        </div>
        <div class="features-image position-relative mx-2 d-inline-block">
          <img src="./assets-users/asset-16.jpeg" alt="" class="w-100 h-100">
          <a href="#" style="left: 0;"
            class="hover-features text-decoration-none w-100 h-100 position-absolute bg-dark bg-opacity-50 top-0">
            <div class="text-white text-center d-flex align-items-center h-100 justify-content-center">
              <span>Featured works</span>
            </div>
          </a>
        </div>
        <div class="features-image position-relative mx-2 d-inline-block">
          <img src="./assets-users/asset-17.jpeg" alt="" class="w-100 h-100">
          <a href="#" style="left: 0;"
            class="hover-features text-decoration-none w-100 h-100 position-absolute bg-dark bg-opacity-50 top-0">
            <div class="text-white text-center d-flex align-items-center h-100 justify-content-center">
              <span>Featured works</span>
            </div>
          </a>
        </div>
        <div class="features-image position-relative mx-2 d-inline-block">
          <img src="./assets-users/asset-7.jpeg" alt="" class="w-100 h-100">
          <a href="#" style="left: 0;"
            class="hover-features text-decoration-none w-100 h-100 position-absolute bg-dark bg-opacity-50 top-0">
            <div class="text-white text-center d-flex align-items-center h-100 justify-content-center">
              <span>Featured works</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="service-ad" class="text-center mt-4 d-flex flex-column align-items-center justify-content-center">
    <span class="fs-3 text-light">FROM PLANNING TO DESIGN TO ESTIMATING TO CONSTRUCTION</span>
    <a href="./services.php" class="mt-3 btn btn-secondary">SERVICES WE OFFER</a>
  </section>
  <footer class="mt-5 py-3 text-center text-white">
    <span>© 2022 FUTURISTIC PROFESSIONALS CONSTRUCTION INT'L SERVICES LTD. • All rights reserved.</span>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>