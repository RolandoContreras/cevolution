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
                <p>Cargando...</p>
            </div>
        </div>
        <!-- Page-->
        <div class="page">
            <?php $this->load->view("header"); ?>
            <!-- Parallax header-->
            <section class="section parallax-container context-dark" data-parallax-img="<?php echo site_url().'static/page_front/images/header_image.jpg';?>">
                <div class="parallax-content parallax-header">
                    <div class="parallax-header__inner context-dark">
                        <div class="parallax-header__content">
                            <div class="container">
                                <div class="row justify-content-sm-center">
                                    <div class="col-md-10 col-xl-8">
                                        <h2 class="heading-decorated">Nuestro Portafolio</h2>
                                        <h6>Conoce más de nuestros trabajos</h6>
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
                    <h4 class="heading-decorated">Portafolio de Proyectos</h4>
                    <div class="isotope-wrap row row-70">
                        <div class="col-sm-12">
                            <ul class="list-nav isotope-filters isotope-filters-horizontal">
                                <li><a data-isotope-filter="Category_1" data-isotope-group="gallery" href="#">Software</a></li>
                                <li><a data-isotope-filter="Category_2" data-isotope-group="gallery" href="#">Diseños</a></li>
                            </ul>
                            <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                                <?php 
                                foreach ($obj_portafolio as $value) { ?>
                                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1">
                                        <a class="img-thumbnail-variant-3" href="<?php echo site_url() . "portafolio/$value->category_slug/$value->slug";?>">
                                            <img src="<?php echo site_url()."static/cms/img/portafolio/$value->portafolio_id/$value->img1";?>" alt="<?php echo $value->name;?>" width="418" height="315"/>
                                            <span class="label-custom label-white">Enlace</span>
                                            <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                                            <p class="heading-5 hover-top-element">Portfolio</p>
                                            <div class="divider"></div>
                                            <p class="small hover-bottom-element"><?php echo $value->name;?></p>
                                            <span class="icon arrow-right linear-icon-arrow-right"></span>
                                        </div></a>
                                </div>
                                <?php } ?>
                                <?php foreach ($obj_diseños as $value) { ?>
                                    <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_2">
                                        <a class="img-thumbnail-variant-3" href="<?php echo site_url() . "static/backoffice/img/diseños/$value->img_2"; ?>" data-lightgallery="item">
                                            <figure>
                                                <img src="<?php echo site_url() . "static/backoffice/img/diseños/$value->img"; ?>" alt="<?php echo $value->name; ?>"/>
                                            </figure>
                                            <div class="caption">
                                                <span class="icon lnr lnr-picture"></span>
                                                <p class="heading-5 hover-top-element"><?php echo $value->name; ?></p>
                                                <div class="divider"></div>
                                                <p class="small hover-bottom-element">VVisualiza la imagen completa.</p>
                                                <span class="icon lnr lnr-select"></span>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Classic Pagination-->
                            <nav>
                                <ul class="pagination-classic">
                                    <?php 
                                    echo $obj_pagination;
                                    ?>
                                </ul>
                            </nav>
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