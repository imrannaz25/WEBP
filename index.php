<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
  <title>naz</title>

  <!-- CSS Links -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />


</head>

<body>
  <?php include 'components/cookie-banner.php'; ?>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section starts -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
          <div class="contact_nav">
            <a href="https://www.google.com.tr/maps/place/İstanbul+Topkapı+Üniversitesi+Altunizade+Yerleşkesi/@41.0228751,29.0437978,17z/data=!3m2!4b1!5s0x14cac81d5e592077:0x81a95a5056215c42!4m6!3m5!1s0x14cac81d5bfcea7d:0x29e4ef7c40556a8!8m2!3d41.0228751!4d29.0463727!16s%2Fg%2F11fxcd24z7?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>Location</span>
            </a>
            <!-- Rest of your header content -->
            <a href="tel:+905316676040">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>Call : +90 53166766040</span>
            </a>
            <a href="mailto:imrannaz.cool@gmail.com">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
          </div>
          <div class="social_box">
            <?php if(isset($_SESSION['email'])): ?>
              <span style="color: white; margin-right: 15px;">
                Welcome, <?php echo htmlspecialchars($_SESSION['firstName']); ?>!
              </span>
            <?php endif; ?>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/imrannaz25/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">naz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <?php if(isset($_SESSION['email'])): ?>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                      <i class="fa fa-sign-out" aria-hidden="true"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>Login</span>
                    </a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      We Provide <br>
                      Welding Services
                    </h1>
                    <p>
                    The company itself is a very successful company. Everyone flees from hatred, but the times of present convenience are a mistake, here to be refused and rejected         </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      We Provide <br>
                      Welding Services
                    </h1>
                    <p>
                    The company itself is a very successful company. Everyone flees from hatred, but the times of present convenience are a mistake, here to be refused and rejected, nor to troubles, and to the labor of truth, which will happen in                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      We Provide <br>
                      Welding Services
                    </h1>
                    <p>
                    The company itself is a very successful company. Everyone flees from hatred, but the times of present convenience are a mistake, here to be refused and rejected, nor to troubles, and to the labor of truth, which will happen in                    </p>
                    <div class="btn-box">
                      <a href="contact.php" class="btn1">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2 class="">
          Our Services
        </h2>
        <p class="col-lg-8 px-0">
          If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
        </p>
      </div>
      <div class="service_container">
        <div class="carousel-wrap ">
          <div class="service_owl-carousel owl-carousel">
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <img src="images/s1.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>
                    Home Welding
                  </h5>
                  <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <img src="images/s4.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>
                    Machine Welding
                  </h5>
                  <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <img src="images/s6.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>
                    Car Welding
                  </h5>
                  <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <img src="images/s1.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>
                    Home Welding
                  </h5>
                  <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <img src="images/s4.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>
                    Machine Welding
                  </h5>
                  <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <img src="images/s6.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>
                    Car Welding
                  </h5>
                  <p>
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- service section ends -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                About Us
              </h2>
            </div>
            <p class="detail_p_mt">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, orThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, orThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
            </p>
            <a href="about.php" class="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img src="images/about-img.jpg" class="box_img" alt="about img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Team
        </h2>
        <p>
          Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris
          iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/t1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Martin Anderson
              </h5>
              <h6 class="">
                supervisor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/t2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Denny Butler
              </h5>
              <h6 class="">
                supervisor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/t3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Nathan Mcpherson
              </h5>
              <h6 class="">
                supervisor
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->

  <!-- contact section -->
<!-- contact section -->
<section class="contact_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 px-0">
        <div class="img-box">
          <img src="images/contact-img.jpg" class="box_img" alt="contact img">
        </div>
      </div>
      <div class="col-md-5 mx-auto">
        <div class="form_container">
          <div class="heading_container heading_center">
            <h2>Get Your Welding Done Right</h2>
          </div>
          <form action="send_mail.php" method="POST">
            <div class="form-row">
              <div class="form-group col">
                <input type="text" name="name" class="form-control" placeholder="What's your name, welding warrior?" required />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <input type="text" name="phone" class="form-control" placeholder="Your phone (so we can forge a connection)" required />
              </div>
              <div class="form-group col-lg-6">
                <select name="service" class="form-control wide" required>
                  <option value="">Select Welding Service</option>
                  <option value="Metal Fabrication">Metal Fabrication</option>
                  <option value="Pipe Welding">Pipe Welding</option>
                  <option value="Custom Repairs">Custom Repairs</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="email" name="email" class="form-control" placeholder="Your email (for welding blueprints)" required />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="text" name="message" class="message-box form-control" placeholder="Describe your welding needs or project" required />
              </div>
            </div>
            <div class="btn_box">
              <button type="submit">Forge the Connection 🔧</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
        <hr>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-7 col-md-9 mx-auto">
                <div class="client_container ">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Jone Mark
                    </h5>
                    <p>
                      Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                    </p>
                    <span>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-7 col-md-9 mx-auto">
                <div class="client_container ">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Jone Mark
                    </h5>
                    <p>
                      Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                    </p>
                    <span>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-7 col-md-9 mx-auto">
                <div class="client_container ">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Jone Mark
                    </h5>
                    <p>
                      Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                    </p>
                    <span>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="row">
          <div class="col-md-3 ">
            <a class="navbar-brand" href="index.html">
              naz
            </a>
          </div>
          <div class="col-md-5 ">
            <div class="info_contact">
              <a href="https://www.google.com.tr/maps/place/İstanbul+Topkapi+University/@40.9951813,28.9176085,17z/data=!3m1!4b1!4m6!3m5!1s0x14cab7f7b9620421:0xfe959152b4ae62cf!8m2!3d40.9951813!4d28.9176085!16s%2Fm%2F0114jrr3?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +90 5316676040
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/imrannaz25/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="info_detail">
              <h5>
                Company
              </h5>
              <p>
                Randomised words which don't look even slightly believable. If you are going to use a passage of
                Lorem
                Ipsum, you need to be sure
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info_form">
              <h5>
                NEWSLETTER
              </h5>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="info_detail">
              <h5>
                Services
              </h5>
              <p>
                Randomised words which don't look even slightly believable. If you are going to use a passage of
                Lorem
                Ipsum, you need to be sure
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="">
              <h5>
                Useful links
              </h5>
              <ul class="info_menu">
                <li>
                  <a href="index.php">
                    Home
                  </a>
                </li>
                <li>
                  <a href="about.php">
                    About
                  </a>
                </li>
                <li>
                  <a href="service.php">
                    Services
                  </a>
                </li>
                <li class="mb-0">
                  <a href="contact.php">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2021 All Rights Reserved By Naz
    </p>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>