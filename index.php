<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Empeetex</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400i&display=swap" rel="stylesheet">
  <?php
  include('./partials/header.php')
  ?>
  <link rel="stylesheet" href="resources/css/home.css">
</head>

<body>
  <!-- Start of Main Content  -->
  <!--  Start of Container Fluid -->
  <div class="container-fluid">


    <!-- Only Visible at MD,SM,XS Breakpoints -->
    <!-- Start of First Row -->

    <div class="d-xl-none d-lg-none d-md-flex d-sm-flex d-flex  justify-content-center">
      <a href="index.php">
        <img id="logo1" src="logo.webp"  width="300px" alt="">
      </a>
    </div>

    <!-- End Of First Row -->

    <!-- Start for Second Row -->
    <div class="row">

      <!-- Market Presence CARD 1 -->
      <div id="card1" class="card  mt-5 col-xl-5 bg-color-255-224-224 border-0 col-lg-5 col-md-6 col-sm-6 col-12">
        <div class="row">
          <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-sm-10 offset-sm-1 col-10 offset-1">
            <a href="exim_page.php">
              <img src="resources/images/home/home exposure map.webp" alt="">
                <div class="d-xl-flex d-lg-flex d-md-flex d-sm-flex d-flex justify-content-center">
                  <h3> market presence</h3>
                </div>
            </a>
          </div>
        </div>
      </div>


      <!-- Achievements CARD 2 -->
      <div id="card2" class="card  mt-5 col-xl-5 offset-xl-2 bg-color-255-224-224 border-0 col-lg-5 offset-lg-2 col-md-6 col-sm-6 col-12">
        <div class="row">
          <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-sm-10 offset-sm-1 col-10 offset-1">
            <a href="awards.php">
              <img src="resources/images/home/home awards.webp" alt="">
                <div class="d-xl-flex d-lg-flex d-md-flex d-sm-flex d-flex justify-content-center">
                  <h3> achievements</h3>
                </div>
            </a>
          </div>
        </div>
      </div>
    </div> <!-- End Of Second row -->

    <!-- Empeetex Logo  -->

    <!-- Start of Third Row -->

    <div class="d-xl-flex d-lg-flex d-md-none d-sm-none d-none  justify-content-center">
      <a href="index.php">
        <img id="logo"src="logo.webp" alt="">
      </a>
    </div> 
    <!-- End Of Third Row -->

    <!-- Start of Fourth Row -->
    <div class="row">

      <!-- About Us CARD 3 -->
      <div class="card mb-3  col-xl-5 bg-color-255-224-224 border-0 col-lg-5 col-md-6 col-sm-6 col-12">
        <div class="row">
          <div id="card3" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-sm-10 offset-sm-1 col-10 offset-1">
            <!-- class="col-xl-8 offset-xl-1 mt-n3" -->
            <a href="about_us_page.php">
              <img src="resources/images/home/home about us.webp" alt="">
              <div class="d-xl-flex d-lg-flex d-md-flex d-sm-flex d-flex justify-content-center">
              <h3> about us </h3>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Contact Us Heading -->
      <div class="col-xl-2 col-lg-2 d-xl-block d-lg-block d-md-none d-sm-none d-none">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <a href="contact_us.php">
              <h2  id="contact_xl"class="text-center mt-5">contact us</h2>
            </a>
          </div>
        </div>
      </div>

      <!-- Products CARD 4 -->
      <div class="card mb-3  col-xl-5 bg-color-255-224-224 border-0 col-lg-5 col-md-6 col-sm-6 col-12">
        <div class="row">
          <div id="card4" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-sm-10 offset-sm-1 col-10 offset-1">
            <!-- class="col-xl-8 offset-xl-2 mt-n3" -->
            <a href="products_page.php">
              <img src="resources/images/home/home Products.webp" alt="">
              <div class="d-xl-flex d-lg-flex d-md-flex d-sm-flex d-flex justify-content-center">
              <h3>products </h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div> <!-- End Of Fourth Row -->

    <!-- Start of Fifth Row Only Visible At MD,SM,XS Breakpoints -->
    <div class="row">
      <div class="col-md-12 d-xl-none d-lg-none d-md-block d-sm-block d-block">
        <div class="row">
          <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-6 offset-3 mb-2">
            <a id="contact_us_a" href="contact_us.php">
              <h2 id="contact_us_sm" class="text-center mt-5">Contact Us</h2>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Of Fifth Row -->

  </div> <!-- End Of Container-Fliud-->

  <!-- Footer Of The Page -->
  <?php
      include('./partials/footer.php');
  ?>

  <!-- JS and Jquery Scripts for The Page At End so WebPage Loads Faster -->
  <script src="Bootstrap4/js/jquery-3.5.1.min.js"></script>
  <script src="Bootstrap4/js/bootstrap.min.js"></script>
  <script src="Bootstrap4/js/bootstrap.js"></script>
</body>

</html>