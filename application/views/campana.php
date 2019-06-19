    <!-- start banner Area -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Campañas
            </h1>
            <p class="text-white link-nav"><a href="index.html">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <span> campañas</span></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start Sample Area -->
    <div class="row justify-content-center">
        <div class="section-top-border">
          <h3 class="mb-30">Campañas</h3>

          <a href="campanas_controller/cargarCampana" class='btn btn-info'> Nueva campaña</a>



          <?php
          echo"<div class="."row justify-content-center".">";
          echo" <div class="."progress-table".">";
                echo"
              <div class="."table-head".">
                <div class="."country".">Nombre campaña</div>
                <div class="."visit".">Fecha</div>
                <div class="."percentage".">Ubicación</div>
              </div>";


              foreach ($listado as $valor) {
                echo"<div class="."table-row".">";
                echo($valor->nombreCampana);
                echo" <div class="."country"."></div>";
                echo($valor->fecha);
                echo"<div class="."visit"."></div>";
                echo($valor->ubicacion);
                echo"<div class="."percentage"."></div>";


                echo "<a href="."campanas_controller/edit/$valor->id_campana"." class='btn btn-success'> <span class='glyphicon glyphicon-pencil'></span></a>";
                  echo "<a href="."campanas_controller/remove/$valor->id_campana"." class='btn btn-danger'> <span class='glyphicon glyphicon-trash'></span></a>";
              //  echo "<a href="."campanas_controller/remove/$valor->id_campana"."class='btn btn-success'> Borrar </a>";




              echo"  </div>";
            }
              echo"</div>";
              echo"</div>";

              ?>
            </div>
  </div>
