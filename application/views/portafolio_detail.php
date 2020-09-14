<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <?php $this->load->view("head"); ?>
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
            <?php $this->load->view("header"); ?>
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
                    <h3><?php echo $obj_portafolio->name; ?></h3>
                    <p><?php echo $obj_portafolio->description; ?></p>
                    <div class="slick-gallery">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel" data-lightgallery="group">
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img1"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="1200" height="800"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img2"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="1200" height="800"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img3"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="1200" height="800"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img4"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="1200" height="800"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img5"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="1200" height="800"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img6"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="1200" height="800"/>
                            </div>
                        </div>
                        <!--//tumbail-->
                        <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="4" data-md-items="5" data-lg-items="6" data-xl-items="8" data-slide-to-scroll="1">
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img1"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="168" height="112"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img2"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="168" height="112"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img3"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="168" height="112"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img4"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="168" height="112"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img5"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="168" height="112"/>
                            </div>
                            <div class="item">
                                <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img6"; ?>' alt="<?php echo $obj_portafolio->name; ?>" width="168" height="112"/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Footer-->
            <?php $this->load->view("footer"); ?>
        </div>
        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- Javascript-->
        <script src="<?php echo site_url() . 'static/page_front/js/core.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'static/page_front/js/script.js'; ?>"></script>
    </body>
</html>