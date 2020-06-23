<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <?php $this->load->view("head")?>
  <body>
    <div class="preloader">
      <div class="cssload-container">
        <svg class="filter" version="1.1">
          <defs>
            <filter id="gooeyness">
              <fegaussianblur in="SourceGraphic" stddeviation="10" result="blur"></fegaussianblur>
              <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result="gooeyness"></fecolormatrix>
              <fecomposite in="SourceGraphic" in2="gooeyness" operator="atop"></fecomposite>
            </filter>
          </defs>
        </svg>
        <div class="dots">
          <div class="dot mainDot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <?php $this->load->view("header");?>
      <section class="section parallax-container context-dark" data-parallax-img="<?php echo site_url().'static/page_front/images/slide/slider-2_evo.png';?>">
        <div class="parallax-content parallax-header text-center">
          <div class="parallax-header__inner context-dark">
            <div class="parallax-header__content">
              <div class="container">
                <div class="row justify-content-sm-center">
                  <div class="col-md-10 col-xl-8">
                    <div class="section-xxl">
                      <h2 class="color-gris">Página no encontrada</h2>
                      <p class="color-gris">No se pudo encontrar la página solicitada; esto podría deberse a un error ortográfico en la URL o a una página eliminada.</p>
                      <a class="button button-black button-shadow" href="<?php echo site_url();?>">Ir a Inicio</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     <?php $this->load->view("footer");?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
    <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
  </body>
</html>