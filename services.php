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
            <li class="nav-item">
              <a class="nav-link" href="./about-us.php">About Us</a>
            </li>
            <li class="nav-item" aria-current="page">
              <a class="nav-link active" href="#">Services</a>
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
    <h5 class="fw-light">SERVICES</h5>
    <span>Futuristic Ltd is a Nigerian company offering holistic professional services covering the Planning, Design,
      Engineering, Construction, Operation and Maintenance of Buildings, Infrastructure and Industry Projects.</span>
    <span class="mt-2 d-block">We adhere to the highest standards for quality and safety. To maintain excellence in
      construction, we continuously build on our robust experience and strong technical expertise through development
      and innovation.</span>
    <span class="mt-2 d-block">We have the skills to deliver quality results, on Time and within Budget, no matter the
      project scope or challenge. Our expertise is bolstered by our highly experienced staff and our commitment to
      implementing innovative solutions towards construction challenges.</span>
    <div class="mt-5">

      <div class="mt-3 pre-con p-2 bg-secondary bg-opacity-25">
        <div style="background: url('./assets-users/asset-2.jpeg') center;" class="py-4 text-center">
          <span style="text-shadow: 2px 2px 5px black;" class="fs-5 fw-bold text-white text-uppercase">INDUSTRIAL &
            RESIDENTIAL BUILDING CONSTRUCTION</span>
        </div>
        <div class="service-text mt-3 pb-3 d-flex align-items-center justify-content-between flex-wrap">
          <div class="col-12 col-lg-6">
            <img src="./assets-users/asset-10.jpeg" alt="">
            <p class="fw-light">
              <span class="d-block mt-4 mb-3">Laying the Groundwork</span>
              <small>
                Futuristic Ltd constructs all kinds of Residential and Industrial buildings for clients.
              </small>
            </p>
          </div>
          <div class="col-12 col-lg-6 ps-lg-2">
            <div class="gallery d-flex align-items-center justify-content-between flex-wrap">
              <img src="./assets-users/asset-11.jpeg" alt="" class="col-6 col-lg-12 px-1 pb-lg-1">
              <img src="./assets-users/asset-17.jpeg" alt="" class="col-6 col-lg-12 px-1 pt-lg-1">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3 design-build p-2 bg-secondary bg-opacity-25">
        <div style="background: url('./assets-users/asset-2.jpeg') center;" class="py-4 text-center">
          <span style="text-shadow: 2px 2px 5px black;" class="fs-5 fw-bold text-white text-uppercase">INFRASTRUCTURAL &
            TOWN DEVELOPMENT</span>
        </div>
        <div class="service-text mt-3 pb-3 d-flex align-items-center justify-content-between flex-wrap">
          <div class="col-12 col-lg-6">
            <img src="./assets-users/infrastructure.jpeg" alt="">
            <p class="fw-light">
              <!-- <span class="d-block mt-4 mb-3">What is Design-Build?</span> -->
              <small class="d-block mt-4">
                Futuristic Ltd constructs any kind of infrastructural & town developmental project or contracts.
              </small>
            </p>
          </div>
          <div class="col-12 col-lg-6 ps-lg-2">
            <div class="gallery d-flex align-items-center justify-content-between flex-wrap">
              <img src="./assets-users/asset-4.jpeg" alt="" class="col-6 col-lg-12 px-1 pb-lg-1">
              <img src="./assets-users/asset-7.jpeg" alt="" class="col-6 col-lg-12 px-1 pt-lg-1">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3 pre-con p-2 bg-secondary bg-opacity-25">
        <div style="background: url('./assets-users/asset-2.jpeg') center;" class="py-4 text-center">
          <span style="text-shadow: 2px 2px 5px black;" class="fs-5 fw-bold text-white text-uppercase">IRRIGATION &
            DRAINAGE SCHEME CONSTRUCTION</span>
        </div>
        <div class="service-text mt-3 pb-3 d-flex align-items-center justify-content-between flex-wrap">
          <div class="col-12 col-lg-6">
            <img src="./assets-users/drainage-1.jpeg" alt="">
            <p class="fw-light">
              <!-- <span class="d-block mt-4 mb-3">We are Here from Start to Finish</span> -->
              <small class="d-block mt-4">
                Futuristic Ltd takes irrigation and drainage projects of different capacities.
              </small>
            </p>
          </div>
          <div class="col-12 col-lg-6 ps-lg-2">
            <div class="gallery d-flex align-items-center justify-content-between flex-wrap">
              <img src="./assets-users/drainage-2.jpeg" alt="" class="col-6 col-lg-12 px-1 pb-lg-1">
              <img src="./assets-users/drainage-3.jpeg" alt="" class="col-6 col-lg-12 px-1 pt-lg-1">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3 pre-con p-2 bg-secondary bg-opacity-25">
        <div style="background: url('./assets-users/asset-2.jpeg') center;" class="py-4 text-center">
          <span style="text-shadow: 2px 2px 5px black;" class="fs-5 fw-bold text-white text-uppercase">WATER TREATMENT
            PLANT CONSTRUCTION.</span>
        </div>
        <div class="service-text mt-3 pb-3 d-flex align-items-center justify-content-between flex-wrap">
          <div class="col-12 col-lg-6">
            <img src="./assets-users/drainage-1.jpeg" alt="">
            <p class="fw-light">
              <!-- <span class="d-block mt-4 mb-3">We are Here from Start to Finish</span> -->
              <small class="d-block mt-4">
                Futuristic Ltd constructs Raw water treatment plants aside been actively involved in developing
                any kind of infrastructure for industrial & residential use. As professionals, we have the capacity to
                embark on construction of any Raw Water treatment plant anywhere on time and within budget.
              </small>
            </p>
          </div>
          <div class="col-12 col-lg-6 ps-lg-2">
            <div class="gallery d-flex align-items-center justify-content-between flex-wrap">
              <img src="./assets-users/drainage-2.jpeg" alt="" class="col-6 col-lg-12 px-1 pb-lg-1">
              <img src="./assets-users/drainage-3.jpeg" alt="" class="col-6 col-lg-12 px-1 pt-lg-1">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3 genral-con p-2 bg-secondary bg-opacity-25">
        <div style="background: url('./assets-users/asset-2.jpeg') center;" class="py-4 text-center">
          <span style="text-shadow: 2px 2px 5px black;" class="fs-5 fw-bold text-white ">GENERAL CONTRACTING</span>
        </div>
        <div class="service-text mt-3 pb-3 d-flex align-items-center justify-content-between flex-wrap">
          <div class="col-12 col-lg-6">
            <img src="./assets-users/asset-17.jpeg" alt="">
            <p class="fw-light">
              <span class="d-block mt-4 mb-3">The Traditional Delivery Method</span>
              <small>
                Futuristic Ltd. is a fully licensed, insured, and bondable commercial general contractor. With this
                traditional delivery method, Futuristic Ltd. usually joins the project team at the conclusion of the
                design
                phase. General contracting services typically provide owners with a traditional design-bid-build
                approach for their construction projects. Futuristic Ltd. can also perform general contracting
                assignments on
                either a negotiated contract or bid basis.
                General contracting is best for straightforward projects that have minimal changes or projects with
                strict policies requiring lump sum bids. We have established relationships with trade contractors
                founded on trust and experience and extensive market knowledge which enable us to be extremely
                competitive while providing unsurpassed quality.
              </small>
            </p>
          </div>
          <div class="col-12 col-lg-6 ps-lg-2">
            <div class="gallery d-flex align-items-center justify-content-between flex-wrap">
              <img src="./assets-users/asset-16.jpeg" alt="" class="col-6 col-lg-12 px-1 pb-lg-1">
              <img src="./assets-users/asset-19.jpeg" alt="" class="col-6 col-lg-12 px-1 pt-lg-1">
            </div>
          </div>
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