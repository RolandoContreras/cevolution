<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
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
            <!-- Swiper-->
            <svg class="defs">
            <defs>
            <lineargradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="50%" stop-color="#AA54ED">
            <animate attributename="stop-color" values="#AA54ED; #5348E2; #AA54ED" dur="5s" repeatcount="indefinite"></animate>
            </stop>
            <stop offset="100%" stop-color="#5348E2">
            <animate attributename="stop-color" values="#5348E2; #AA54ED; #5348E2" dur="5s" repeatcount="indefinite"></animate>
            </stop>
            </lineargradient>
            </defs>
            </svg>
            <div class="swiper-container swiper-slider swiper-slider_fullheight swiper-digital" data-effect="circle-bg" data-loop="false" data-autoplay="4600" data-speed="1600" data-mousewheel="false" data-keyboard="false" data-circle-fill="url(#gradient1)">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-circle-cx=".3" data-circle-cy=".5" data-circle-r=".14" style="background-image: url(<?php echo site_url() . 'static/page_front/images/slide/slider-evo.png'; ?>);">
                        <div class="swiper-slide-caption" style="width: 100%">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-xxl-5 d-flex justify-content-center">
                                        <div>
                                            <h6 class="text-white text-right" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 500 }">Agencia DIGITAL</h6>
                                            <h1 class="text-white" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 700 }"> <span class="text-lowercase heading-4 text-white"></span><span>EVOLUCION</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-circle-cx=".7" data-circle-cy=".5" data-circle-r=".2" style="background-image: url(<?php echo site_url() . 'static/page_front/images/slide/slider-2_evo.png'; ?>);">
                        <div class="swiper-slide-caption text-center" style="width: 100%">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="text-white" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 500 }">Construido por especialistas para ti</h2>
                                        <h5 class="text-white text-width-2 block-centered" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 700 }">Evolución tiene como objetivo satisfacer las necesidades reales de proyectos reales.</h5>
                                        <div class="group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 900 }">
                                            <a class="button button-black button-shadow" href="#about" data-custom-scroll-to="features">Probar DEMO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-circle-cx=".6" data-circle-cy=".5" data-circle-r=".18" style="background-image: url(<?php echo site_url() . 'static/page_front/images/slide/slider-3-evo.png'; ?>);">
                        <div class="swiper-slide-caption d-flex justify-content-center">
                            <div>
                                <h4 class="text-white text-right" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 200 }">Nuevos diseños y herramientas</h4>
                                <h1 class="text-white bg-accent p-2 pt-lg-3 pl-lg-3 pr-lg-3" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 400 }"><span class="text-lowercase heading-4 text-white">web</span><span>EVOLUCIÓN</span></h1>
                                <h4 class="text-white text-left mt-1" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 600 }">Contruye tus sueños</h4>
                                <div class="group-lg group-middle" data-swiper-anime="{ &quot;animation&quot;: &quot;swiperContentRide&quot;, &quot;duration&quot;: 800, &quot;delay&quot;: 800 }">
                                    <a class="button button-primary button-shadow" href="#features" data-custom-scroll-to="features">Probar DEMO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev linear-icon-chevron-left"></div>
                <div class="swiper-button-next linear-icon-chevron-right"></div>
            </div>
            <!-- Our Services -->
            <section class="services section-xl bg-default text-center">
                <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 100,  &quot;smoothness&quot;: 30}">
                    <img data-src="<?php echo site_url() . 'static/page_front/images/bg-decor-1.png'; ?>" class="lazyload" alt="fondo1"/>
                </div>
                <div class="bg-decor" data-parallax-scroll="{&quot;x&quot;: 80, &quot;y&quot;: 80,  &quot;smoothness&quot;: 30}">
                    <img data-src="<?php echo site_url() . 'static/page_front/images/bg-decor-3.png'; ?>" class="lazyload" alt="fondo3"/>
                </div>
                <div class="container">
                    <h4 class="heading-decorated">Nuestros Servicios</h4>
                    <!-- Circle carousel -->
                    <div class="carousel-wrapper">
                        <div class="circle-carousel" data-speed="1000" data-autoplay="5000">
                            <!-- slides -->
                            <div class="slides">
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img bg-overlay-dark" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_1.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Software Multinivel a Medida</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_2.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Sistemas Administrativos</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_3.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Aplicativos</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img bg-overlay-dark" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_4.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Sistemas de Prospección</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_5.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Diseños Publicitarios</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img bg-overlay-dark" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_6.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Posicionamiento de Marca</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_7.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Marketing y Multimedia</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="content-box-inner">
                                        <div class="content-box-img" style="background-image: url(<?php echo site_url() . 'static/page_front/images/service_8.jpg'; ?>)">
                                            <div class="content-title-wrap">
                                                <div class="content-title">
                                                    <h4><a href="#">Negocio Rentable</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- pagination-->
                            <div class="pagination">
                                <div class="item">
                                    <div class="dot">
                                        <span class="lnr lnr-screen"></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dot">
                                        <span class="lnr lnr-chart-bars"></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dot">
                                        <i class="lnr lnr-laptop-phone"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dot">
                                        <i class="lnr lnr-users"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dot">
                                        <i class="lnr lnr-shirt"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dot">
                                        <i class="lnr lnr-tag"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dot">
                                        <i class="lnr lnr-film-play"></i>
                                        <span></span>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="dot">
                                        <i class="lnr lnr-rocket"></i>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="prev"><span>PREV</span></div>
                            <div class="next"><span>NEXT</span></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About us-->
            <section class="bg-gray-lighter object-wrap decor-text" data-content="Aerca" id="about">
                <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}">
                    <img data-src="<?php echo site_url() . 'static/page_front/images/bg-decor-4.png'; ?>" class="lazyload" alt="Acerca">
                </div>
                <div class="section-lg">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6">
                                <h4 class="heading-decorated">Acerca de Nosotros</h4>
                                <p>Somos una agencia digital que nos especializamos en crear y posicionar marcas trabajando con los mejores profesionales del medio y de esta forma dando vida a tus sueños.</p>
                                <p>Lo único que necesitas es tener una idea y del resto del trabajo se lo dejas a EVOLUCION. Nosotros analizamos cada sección de tu empresa, trabajamos en ella para que tengas éxito como las grandes empresas y lo mejor de todo es que contarás con todo el equipo de EVOLUCION ayudándote en tu crecimiento.</p>
                                <div class="row row-30">
                                    <div class="col-xl-12">
                                        <!-- Blurb minimal-->
                                        <article class="blurb blurb-minimal">
                                            <div class="unit flex-row unit-spacing-md">
                                                <div class="unit-left">
                                                    <div class="blurb-minimal__icon">
                                                        <span class="icon lnr lnr-star-half"></span>
                                                    </div>
                                                </div>
                                                <div class="unit-body">
                                                    <p class="blurb__title heading-12"><a>¿Por qué EVOLUCION?</a></p>
                                                    <p>Durante muchos años hemos visto todas las dificultades que los clientes tienen al momento de adquirir un software, muchos se ven desorientados, no saben a quién contratar, y lo peor es que las empresas de software solo buscan su beneficio y se aprovechan de la falta de información en el área.</p>
                                                    <p> Ante tal premisa, se crea EVOLUCION una agencia digital que hace alianza con los clientes y asume cada software como propios, dando información, asesoramiento y una entrega al más alto grado.</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image" style="background-image: url(<?php echo site_url() . 'static/page_front/images/acerca-img.png'; ?>)"></div>
            </section>
            <section class="section-md bg-default decor-text" data-content="Features">
                <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;x&quot;: -50,  &quot;smoothness&quot;: 30}">
                    <img data-src="<?php echo site_url() . 'static/page_front/images/bg-decor-5.png'; ?>" class="lazyload" alt="Caracteristicas">
                </div>
                <div class="container">
                    <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
                        <div class="col-md-8 col-lg-6">
                            <h4 class="heading-decorated">Características Principales</h4>
                            <!-- Blurb minimal-->
                            <article class="blurb blurb-minimal">
                                <div class="unit flex-row unit-spacing-md">
                                    <div class="unit-left">
                                        <div class="blurb-minimal__icon">
                                            <span class="icon lnr lnr-laptop-phone"></span>
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        <p class="blurb__title heading-6">Softwares a medida</p>
                                        <p>No es lo mismo comprar ropa de diseñador a ropa en un supermercado. De la misma forma funcionan los softwares. Creamos software a medida del cliente, en base a sus necesidades y proyecciones a futuro, softwares exclusivos que nadie más tendrá.</p>
                                    </div>
                                </div>
                            </article>
                            <!-- Blurb minimal-->
                            <article class="blurb blurb-minimal">
                                <div class="unit flex-row unit-spacing-md">
                                    <div class="unit-left">
                                        <div class="blurb-minimal__icon">
                                            <span class="icon lnr lnr-users"></span>
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        <p class="blurb__title heading-6">Profesionales expertos a tu servicio</p>
                                        <p>Cuando eres parte de EVOLUCION tienes un grupo extenso de profesionales a tu servicio empezando por diseñadores gráficos hasta abogados especialistas en leyes. Siempre tendrás a un profesional de EVOLUCION respaldando tu negocio.</p>
                                    </div>
                                </div>
                            </article>
                            <!-- Blurb minimal-->
                            <article class="blurb blurb-minimal">
                                <div class="unit flex-row unit-spacing-md">
                                    <div class="unit-left">
                                        <div class="blurb-minimal__icon">
                                            <span class="icon lnr lnr-rocket"></span>
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        <p class="blurb__title heading-6">Productos creados para actualizarse</p>
                                        <p>Creamos nuestros productos con la base de la actualización, la tecnología avanza y por lo tanto tu negocio debería de actualizarse también, nuestros expertos constantemente estarán actualizando tu producto ya que han sido creados para el crecimiento.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-7 col-lg-4">
                            <figure class="image-sizing-1" data-parallax-scroll="{&quot;y&quot;: -50,  &quot;smoothness&quot;: 30}">
                                <img data-src="<?php echo site_url() . 'static/page_front/images/servicios-img.png'; ?>" class="lazyload" alt="Servicios" />
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to Action-->
            <section class="section section-sm context-dark bg-gray-darker section-cta">
                <div class="container">
                    <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                        <div class="col-xl-8 text-xl-left">
                            <h4><span class="text-transform-none">EVOLUCION</span><br><span>Una solución flexible a tu alcance</span></h4>
                            <p>¡Empieza a construir tus sueños, contáctate ahora!</p>
                        </div>
                        <div class="col-xl-2 text-xl-right"><a class="button button-primary" href="<?php echo site_url() . 'contacto'; ?>">Contacto</a></div>
                    </div>
                </div>
            </section>
            <!-- portfolio-->
            <section class="section-md bg-default text-center">
                <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}">
                    <img data-src="<?php echo site_url() . 'static/page_front/images/bg-decor-6.png'; ?>" class="lazyload" alt="Portafoio">
                </div>
                <div class="container">
                    <h4 class="heading-decorated">Portafolio</h4>
                    <div class="isotope-wrap row row-70">
                        <div class="col-sm-12">
                            <ul class="list-nav isotope-filters isotope-filters-horizontal">
                                <li><a data-isotope-filter="Category_1" data-isotope-group="gallery" href="#">Software</a></li>
                                <li><a data-isotope-filter="Category_2" data-isotope-group="gallery" href="#">Diseños</a></li>
                            </ul>
                            <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
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
                                                <p class="small hover-bottom-element">Visualiza la imagen completa.</p>
                                                <span class="icon lnr lnr-select"></span>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php foreach ($obj_portafolio as $value) { ?>
                                    <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1" style="position: absolute; left: 0px; top: 0px;">
                                        <a class="img-thumbnail-variant-3" href="<?php echo site_url() . "portafolio/$value->category_slug/$value->slug"; ?>">
                                            <img src="<?php echo site_url() . "static/cms/img/portafolio/$value->portafolio_id/$value->img1"; ?>" alt="<?php echo $value->name; ?>" width="418" height="315">
                                            <span class="label-custom label-white">Enlace</span>
                                            <div class="caption">
                                                <span class="icon hover-top-element linear-icon-folder-picture"></span>
                                                <ul class="list-inline-tag hover-top-element">
                                                    <li>Portafolio</li>
                                                </ul>
                                                <p class="heading-5 hover-top-element"><?php echo $value->name; ?></p>
                                                <div class="divider"></div>
                                                <span class="icon arrow-right linear-icon-arrow-right"></span>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--servicios-->
            <section class="section parallax-container context-dark decor-text" data-parallax-img="<?php echo site_url() . "static/page_front/images/bg-image-7.jpg"; ?>" data-content="Servicios">
                <div class="parallax-content"> 
                    <div class="container p-b-30">
                    <div class="row row-50">
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table-wrap">
                                <div class="pricing-table">
                                    <div class="pricing-label"><span></span>
                                        <svg width="86px" height="86px" viewBox="0 0 86 86">
                                        <path d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                        </svg>
                                    </div>
                                    <div class="pricing-header">
                                        <h5>Landing Page + Campaña Publicitaria</h5>
                                        <div class="price"><span>$200</span><span>/único pago</span></div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="list">
                                            <li><span>+ Creación de la página web del negocio</span></li>
                                            <li>+ Dominio </li>
                                            <li>+ Hosting y almacenamiento</li>
                                            <li>+ SSL (certificado de seguridad / por vida)</li>
                                            <li>+ Asesor para campañas publicitarias</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <a class="button button-primary" href="#">Comprar Ahora!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table-wrap">
                                <div class="pricing-table pricing-table-label">
                                    <div class="pricing-label"><span>¡Solo por campaña!</span>
                                        <svg width="86px" height="86px" viewBox="0 0 86 86">
                                        <path d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                        </svg>
                                    </div>
                                    <div class="pricing-header">
                                        <h5>Plataforma de Educación Online</h5>
                                        <div class="price"><span>$340</span><span>/semestrales</span></div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="list">
                                            <li><span>+ Gestión Académica</span></li>
                                            <li>+ Gestión Administrativa </li>
                                            <li>+ Educación Virtual</li>
                                            <li>+ Gestión Comercial</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer"><a class="button button-primary" href="#">Comprar Ahora!</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table-wrap">
                                <div class="pricing-table">
                                    <div class="pricing-label"><span></span>
                                        <svg width="86px" height="86px" viewBox="0 0 86 86">
                                        <path d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                        </svg>
                                    </div>
                                    <div class="pricing-header">
                                        <h5>Sistemas Multinivel</h5>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="list">
                                            <li><span>+ Backoffice (Oficina virtual)</span></li>
                                            <li>+ Plan Binario </li>
                                            <li>+ Unilevel</li>
                                            <li>+ Matriz</li>
                                            <li>+ Línea de Carrera</li>
                                            <li>+ <li>+ Línea de Carrera y más</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer"><a class="button button-primary" href="#">Contactar Asesor</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table-wrap">
                                <div class="pricing-table">
                                    <div class="pricing-label"><span></span>
                                        <svg width="86px" height="86px" viewBox="0 0 86 86">
                                        <path d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                        </svg>
                                    </div>
                                    <div class="pricing-header">
                                        <h5>Contratos Inteligentes</h5>
                                        <div class="price"><span>Muy Pronto</span></div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="list">
                                            <li><span>+ Blockchain de Tron </span></li>
                                            <li>+ Blockchain de Ethereum</li>
                                            <li>+ Gestión administrativa</li>
                                            <li>+ Y más</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer"><a class="button button-primary" href="#">Contactar Asesor</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!--testimonios-->
            <section class="section parallax-container context-dark decor-text" data-parallax-img="<?php echo site_url() . "static/page_front/images/bg-image-6.jpg"; ?>" data-content="Testimonios">
                <div class="parallax-content"> 
                    <div class="container section-lg text-center">
                        <h4 class="heading-decorated">QUE DICEN LOS CLIENTES</h4>
                        <!-- Owl Carousel-->
                        <div class="owl-carousel" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-dots="true" data-nav="false" data-autoplay="true">
                            <?php foreach ($obj_testimony as $value) { ?>
                                <div class="item">
                                    <div class="quote-default">
                                        <div class="quote-default__image">
                                            <img data-src="<?php echo site_url() . "static/backoffice/img/testimonios/$value->img"; ?>" class="lazyload" alt="<?php echo $value->name ?>"/>
                                        </div>
                                        <div class="quote-default__text">
                                            <p class="q"><?php echo $value->description ?></p>
                                        </div>
                                        <p class="quote-default__cite"><?php echo $value->name; ?></p>
                                        <p class="q"><?php echo $value->web; ?></p>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </section>
            <section class="section-md text-center bg-default">
                <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 130, &quot;smoothness&quot;: 30}">
                    <img data-src="<?php echo site_url() . "static/page_front/images/bg-decor-4.png"; ?>" class="lazyload" alt="Testimonios"/>
                </div>
                <div class="container">
                    <h4 class="heading-decorated">Nuestros Clientes</h4>
                    <div class="row row-30">
                        <?php foreach ($obj_marcas as $value) { ?>
                            <div class="col-sm-6 col-md-3">
                                <figure class="box-icon-image">
                                    <a>
                                        <img data-src="<?php echo site_url() . "static/backoffice/img/marcas/$value->img"; ?>" class="lazyload" alt="<?php echo $value->name; ?>"/>
                                    </a>
                                </figure>
                            </div>
                        <?php } ?> 
                    </div>
                </div>
            </section>
            <!-- Page Footer -->
            <?php $this->load->view("footer"); ?>
        </div>
        <script src="<?php echo site_url() . 'static/page_front/js/seo/lazysizes.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'static/page_front/js/core.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'static/page_front/js/script.js'; ?>"></script>
    </body>
</html>