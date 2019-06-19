<!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Campañas
            </h1>
            <p class="text-white link-nav"><a href="<?php echo base_url(); ?>index.php/campanas_controller">Campañas</a>  <span class="lnr lnr-arrow-right"></span>  <span> Nueva campaña</span></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start Sample Area -->



    <section class="Volunteer-form-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-60 col-lg-9">
            <div class="title text-center">
              <h1 class="mb-20">Nueva campaña</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">

        

            <?php echo form_open('campanas_controller/add'); ?>
            <div class="form-group">
              <label for="first-name">Nombre campaña</label>
                <input type="textArea" name="nombreCampana" class="form-control" placeholder="Vacunacion Julio" value="<?php echo $this->input->post('nombreCampana'); ?>" />
            </div>

            <div class="form-group">
              <label for="last-name">Fecha</label>
                <input type="date" min="<?php echo date('Y-m-d') ?>" required name="fecha" class="form-control" value="<?php echo $this->input->post('fecha'); ?>" />
            </div>

            <div class="form-group">
                <label for="City">Ubicación</label>
                  <input type="text" name="ubicacion" class="form-control" value="<?php echo $this->input->post('ubicacion'); ?>" />
            </div>
            <div class="form-group">
            <a href="<?php echo base_url(); ?>index.php/campanas_controller"  class="primary-btn">Volver</a>
            <button type="submit" class="primary-btn float-right">Aceptar</button>
            </div>
              <?php echo form_close(); ?>
          </div>
      </div>
    </section>