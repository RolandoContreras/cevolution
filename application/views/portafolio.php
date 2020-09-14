<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <?php $this->load->view("head");?>
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
        <p>Loading...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- PANEL-->
      <?php $this->load->view("header");?>
      <section class="section parallax-container context-dark" data-parallax-img="<?php echo site_url() . 'static/page_front/images/header_image.jpg'; ?>">
        <div class="parallax-content parallax-header">
          <div class="parallax-header__inner context-dark">
            <div class="parallax-header__content">
              <div class="container">
                <div class="row justify-content-sm-center">
                  <div class="col-md-10 col-xl-8">
                    <h2 class="heading-decorated">Portafolio</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-default text-center">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}"><img src="images/bg-decor-6.png" alt=""/>
        </div>
        <div class="container">
          <h3>Portfolio Album</h3>
          <p>Each business niche may require a unique functionality of its own.</p>
          <div class="slick-gallery">
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel" data-lightgallery="group">
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-1-1200x800.jpg" alt="" width="1200" height="800"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-2-1200x800.jpg" alt="" width="1200" height="800"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-3-1200x800.jpg" alt="" width="1200" height="800"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-4-1200x800.jpg" alt="" width="1200" height="800"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-5-1200x800.jpg" alt="" width="1200" height="800"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-6-1200x800.jpg" alt="" width="1200" height="800"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-7-1200x800.jpg" alt="" width="1200" height="800"/>
              </div>
            </div>
            <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="4" data-md-items="5" data-lg-items="6" data-xl-items="8" data-slide-to-scroll="1">
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-thumb-1-168x112.jpg" alt="" width="168" height="112"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-thumb-2-168x112.jpg" alt="" width="168" height="112"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-thumb-3-168x112.jpg" alt="" width="168" height="112"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-thumb-4-168x112.jpg" alt="" width="168" height="112"/>
              </div>
                <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-thumb-5-168x112.jpg" alt="" width="168" height="112"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-thumb-6-168x112.jpg" alt="" width="168" height="112"/>
              </div>
              <div class="item"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-single-thumb-7-168x112.jpg" alt="" width="168" height="112"/>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
     <?php $this->load->view("footer");?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
    <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
  </body>
</html>