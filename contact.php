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
            <li class="nav-item" aria-current="page">
              <a class="nav-link active" href="./contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <section style="margin-top: 5rem;" class="px-2 px-lg-4">
    <h5 class="fw-light">CONTACT</h5>
    <div class="mt-5 d-flex align-items-center flex-wrap">
      <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
        <div class="d-flex flex-column">
          <h6 class="fw-bolder">Futuristic Ltd.</h6>
          <span class="fw-light">Block H Sky Memorial Plaza, Michael Okpara Street, Wuse, Abuja - FCT.</span>
          <span class="fw-light">Tel:
            <a href="tel:+2347063088668" class="read-more text-decoration-none">+2347063088668</a>,
            <a href="tel:+2348084504096" class="read-more text-decoration-none">+2348084504096</a>
          </span>
          <span class="fw-light">Email: <a href="mailto:fpcintleservices@yahoo.com"
              class="read-more text-decoration-none">fpcintleservices@yahoo.com</a></span>
        </div>
        <img src="./assets-users/logo.png" alt="" style="width: 100px;" class="px-2">
      </div>
      <div class="col-12 col-lg-6 fw-light mt-5 mt-lg-0 px-lg-3">
        <p>
          You can always visit us at our headquarters, we have a friendly staff and a mean cup of coffee. Or just stop
          by to say hello to our mascot, Kaley.
        </p>
        <p>
          Feel free to talk to one of our representatives at any time. Please use our contact form below or call our
          office. Let us build your future together!
        </p>
      </div>
    </div>
    <div class="mt-5">
      <section id="map">
        <iframe class="w-100"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.8609454781235!2d7.396379215288265!3d9.076430290742175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e75c8298de8c3%3A0xd3423efaf88b6898!2sZone%205%20Sky%20Memorial%20Complex!5e0!3m2!1sen!2sng!4v1669205223408!5m2!1sen!2sng"
          height="500px" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
      <div class="mt-5">
        <!-- <h5 class="fw-light">PRE-QUALIFICATION REQUIREMENTS FOR BIDDERS</h5>
        <span>Please click here to download our qualification criteria: <a href=""
            class="read-more fw-bold">HJ-High-prequalification-form</a>
        </span> -->
  <?php

        if(isset($_POST['add-msg'])){
        $name =$_POST['name'];
        $email =$_POST['email'];
        $subject =$_POST['subject'];
        $message =$_POST['message'];
        // $date = date('m/d/Y h:i:s a', time());

            if($name==""||$email==""||$subject=="" ||$message==""){
                echo "<script type='text/javascript'> document.location = 'contact.php'; </script>";
            }else{
                    $query = "INSERT INTO message(name,email,subject,message) " ;
                    $query.= "VALUE('{$name}','{$email}','{$subject}','{$message}' ) " ;
                
                    $create_msg_query = mysqli_query($con, $query);
                
                            if(!$create_msg_query){
                                die('QUERY FAILED'.mysqli_error($con));
                            }
                            echo "<script>alert('Message Sent');</script>";
                            $extra="contact.php";
                            echo "<script>window.location.href='".$extra."'</script>";
                }  
        }
?>
        <form class="mt-4" method="post">
            <label class="fw-light fs-5">SEND US A MESSAGE</label>
            <div class="d-flex align-items-center flex-wrap">
              <div class="col-12 col-lg-6 mt-4 px-2 px-lg-4">
                <input type="text" name="name" id="" class="form-control mb-3" placeholder="Name">
                <input type="text" name="subject" id="" class="form-control mb-3" placeholder="Subject">
                <input type="email" name="email" id="" class="form-control mb-3" placeholder="Email" Required>
              </div>
              <div class="col-12 col-lg-6 mt-lg-4 px-2 px-lg-4">
                <textarea name="message" id="" class="form-control" rows="5" style="resize: none;"
                  placeholder="Message" Required></textarea>
              </div>
            </div>
            <input type="submit" name="add-msg" value="SEND MESSAGE" class="btn btn-dark fw-light mt-3 d-block mx-auto">
        </form>
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