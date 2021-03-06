<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Animal Shelter</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
  </head>
  <body>
      <header id="header" id="home">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="cats.html">Cats</a></li>
                <li><a href="dogs.html">Dogs</a></li>
                <li><a href="volunteer.html">Volunteer</a></li>
                <li class="menu-has-children"><a href="">Blog</a>
                  <ul>
                    <li><a href="blog-home.html">Blog Home</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li class="menu-has-children"><a href="">Dropdown</a>
                  <ul>
                    <li><a href="elements.html">Elements</a></li>
                    <li><a href="#">Item</a></li>
                    <li class="menu-has-children"><a href="">Level 2</a>
                    <ul>
                      <li><a href="#">Item 1</a></li>
                      <li><a href="#">Item 2</a></li>
                    </ul>
                  </li>
                  </ul>
                </li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Elements
            </h1>
            <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Elements</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start Sample Area -->
    <div class="row justify-content-center">
        <div class="section-top-border">
          <h3 class="mb-30">Rescatistas</h3>




          <?php
          echo"<div class="."row justify-content".">";
          echo" <div class="."progress-table".">";
                echo"
              <div class="."table-head".">
                <div class="."country".">Nombre</div>
                <div class="."visit".">Apellido</div>
                <div class="."percentage".">e-mail</div>
                <div class="."country".">Direccion</div>
                <div class="."visit".">Fecha nacimiento</div>
                <div class="."percentage".">Telefono</div>
                  <div class="."percentage".">Aprobar</div>
              </div>";


              foreach ($rescatistas as $valor) {
                echo"<div class="."table-row".">";
                echo($valor->nombre);
                echo" <div class="."country"."></div>";
                echo($valor->apellido);
                echo"<div class="."visit"."></div>";
                echo($valor->email);
                echo"<div class="."visit"."></div>";
                echo($valor->direccion);
                echo"<div class="."visit"."></div>";
                echo($valor->fechaNacimiento);
                echo"<div class="."visit"."></div>";
                echo($valor->telefono);

        ?>

              <a href="<?php echo site_url('c_conexion/contestarSolicitud/'.$valor->dni.'/2'); ?>" class="btn"> Aceptar</a>
              <a href="<?php echo site_url('c_conexion/contestarSolicitud/'.$valor->dni.'/0'); ?>" class="btn">Rechazar</a>
              <?php
              echo"  </div>";
            }
              echo"</div>";
              echo"</div>";

              ?>
            </div>



              </div>
            </div>
          </div>
        </div>

                <!-- For Gradient Border Use -->
                <!-- <div class="mt-10">
                  <div class="primary-input">
                    <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                    <label for="primary-input"></label>
                  </div>


    <!-- start footer Area -->
    <footer class="footer-area">
      <div class="container">
        <div class="row pt-120 pb-80">
          <div class="col-lg-4 col-md-6">
            <div class="single-footer-widget">
              <h6>About Us</h6>
              <p>
                Few would argue that, despite the advanc ements off eminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-footer-widget">
              <h6>Useful Links</h6>
              <div class="row">
                <ul class="col footer-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Case Study</a></li>
                </ul>
                <ul class="col footer-nav">
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4  col-md-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Contact Us</h6>
              <ul class="list-contact">
                <li class="flex-row d-flex">
                  <div class="icon">
                    <span class="lnr lnr-home"></span>
                  </div>
                  <div class="detail">
                    <h4>Binghamton, New York</h4>
                    <p>
                      4343 Hinkle Deegan Lake Road
                    </p>
                  </div>
                </li>
                <li class="flex-row d-flex">
                  <div class="icon">
                    <span class="lnr lnr-phone-handset"></span>
                  </div>
                  <div class="detail">
                    <h4>00 (953) 9865 562</h4>
                    <p>
                      Mon to Fri 9am to 6 pm
                    </p>
                  </div>
                </li>
                <li class="flex-row d-flex">
                  <div class="icon">
                    <span class="lnr lnr-envelope"></span>
                  </div>
                  <div class="detail">
                    <h4>support@colorlib.com</h4>
                    <p>
                      Send us your query anytime!
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-text">
        <div class="container">
          <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-6 footer-text m-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-6 footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="<?php echo base_url();?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url();?>/assets/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>/assets/js/vendor/bootstrap.min.js"></script>
    <script type="<?php echo base_url();?>/assets/text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="<?php echo base_url();?>/assets/js/easing.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/hoverIntent.js"></script>
    <script src="<?php echo base_url();?>/assets/js/superfish.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/mail-script.js"></script>
    <script src="<?php echo base_url();?>/assets/js/main.js"></script>
  </body>
</html>
