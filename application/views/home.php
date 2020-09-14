<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
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
        <p>Cargando...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <?php $this->load->view("header");?>
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
            <div class="swiper-slide" data-circle-cx=".3" data-circle-cy=".5" data-circle-r=".14" style="background-image: url(<?php echo site_url().'static/page_front/images/slide/slider-evo.png';?>);">
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
          <div class="swiper-slide" data-circle-cx=".7" data-circle-cy=".5" data-circle-r=".2" style="background-image: url(<?php echo site_url().'static/page_front/images/slide/slider-2_evo.png';?>);">
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
          <div class="swiper-slide" data-circle-cx=".6" data-circle-cy=".5" data-circle-r=".18" style="background-image: url(<?php echo site_url().'static/page_front/images/slide/slider-3-evo.png';?>);">
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
            <img src="<?php echo site_url().'static/page_front/images/bg-decor-1.png';?>" alt="fondo1"/>
        </div>
        <div class="bg-decor d-flex align-items-end" data-parallax-scroll="{&quot;x&quot;: -150, &quot;from-scroll&quot;: 420, &quot;smoothness&quot;: 30}">
            <img src="<?php echo site_url().'static/page_front/images/bg-decor-2.png';?>" alt="fondo2"/>
        </div>
        <div class="bg-decor" data-parallax-scroll="{&quot;x&quot;: 80, &quot;y&quot;: 80,  &quot;smoothness&quot;: 30}">
            <img src="<?php echo site_url().'static/page_front/images/bg-decor-3.png';?>" alt="fondo3"/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Nuestro Servicios</h4>
          <!-- Circle carousel -->
          <div class="carousel-wrapper">
            <div class="circle-carousel" data-speed="1000" data-autoplay="5000">
              <!-- slides -->
              <div class="slides">
                <div class="content-box">
                  <div class="content-box-inner">
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(<?php echo site_url().'static/page_front/images/service_1.jpg';?>)">
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
                    <div class="content-box-img" style="background-image: url(<?php echo site_url().'static/page_front/images/service_2.jpg';?>)">
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
                    <div class="content-box-img" style="background-image: url(<?php echo site_url().'static/page_front/images/service_3.jpg';?>)">
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
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(<?php echo site_url().'static/page_front/images/service_4.jpg';?>)">
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
                    <div class="content-box-img" style="background-image: url(<?php echo site_url().'static/page_front/images/service_5.jpg';?>)">
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
                    <div class="content-box-img bg-overlay-dark" style="background-image: url(<?php echo site_url().'static/page_front/images/service_6.jpg';?>)">
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
                    <div class="content-box-img" style="background-image: url(<?php echo site_url().'static/page_front/images/service_7.jpg';?>)">
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
                    <div class="content-box-img" style="background-image: url(<?php echo site_url().'static/page_front/images/service_8.jpg';?>)">
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
            <img src="<?php echo site_url().'static/page_front/images/bg-decor-4.png';?>" alt="acerca"/>
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
        <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image" style="background-image: url(<?php echo site_url().'static/page_front/images/acerca-img.png';?>)"></div>
      </section>
      <section class="section-md bg-default decor-text" data-content="Features">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;x&quot;: -50,  &quot;smoothness&quot;: 30}">
            <img src="<?php echo site_url().'static/page_front/images/bg-decor-5.png';?>" alt="Caracteristicas"/>
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
                  <img src="<?php echo site_url().'static/page_front/images/servicios-img.png';?>" alt="" width="1481" height="2068"/>
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
              <h4><span class="text-transform-none">EVOLUCION</span><br><span>Una solución flexible a bajo costo</span></h4>
              <p>¡Empieza a construir tus sueños, contáctate ahora!</p>
            </div>
              <div class="col-xl-2 text-xl-right"><a class="button button-primary" href="<?php echo site_url().'contacto';?>">Contacto</a></div>
          </div>
        </div>
      </section>
      <!-- portfolio-->
      <section class="section-md bg-default text-center">
        <div class="bg-decor d-flex align-items-center" data-parallax-scroll="{&quot;y&quot;: 50,  &quot;smoothness&quot;: 30}">
            <img src="<?php echo site_url().'static/page_front/images/bg-decor-6.png';?>" alt="fondo_works"/>
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
                  <?php 
                  foreach ($obj_diseños as $value) { ?>
                        <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_2">
                            <a class="img-thumbnail-variant-3" href="<?php echo site_url()."static/backoffice/img/diseños/$value->img_2";?>" data-lightgallery="item">
                                  <figure>
                                      <img src="<?php echo site_url()."static/backoffice/img/diseños/$value->img";?>" alt="<?php echo $value->name;?>"/>
                                  </figure>
                                  <div class="caption">
                                      <span class="icon lnr lnr-picture"></span>
                                    <p class="heading-5 hover-top-element"><?php echo $value->name;?></p>
                                    <div class="divider"></div>
                                    <p class="small hover-bottom-element">VVisualiza la imagen completa.</p>
                                    <span class="icon lnr lnr-select"></span>
                                  </div>
                            </a>
                        </div>
                  <?php } ?>
                  <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1" style="position: absolute; left: 0px; top: 0px;">
                      <a class="img-thumbnail-variant-3" href="<?php echo site_url()."portafolio/single-portfolio"?>">
                          <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-1-418x315.jpg" alt="" width="418" height="315">
                          <span class="label-custom label-white">Link</span>
                          <div class="caption">
                              <span class="icon hover-top-element linear-icon-folder-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>9 photos</li>
                              <li>People</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Portfolio Album</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-arrow-right"></span>
                          </div>
                      </a>
                </div>
<!--                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1">
                    <a class="img-thumbnail-variant-3" href="single-portfolio.html">
                        <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-3-418x315.jpg" alt="" width="418" height="315"/>
                        <span class="label-custom label-white">Enlace</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>9 photos</li>
                              <li>Objects</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Portfolio Album</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-arrow-right"></span>
                          </div></a>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section parallax-container context-dark decor-text" data-parallax-img="https://livedemo00.template-help.com/wt_69536/images/bg-image-6.jpg" data-content="Testimonials">
        <div class="parallax-content"> 
          <div class="container section-lg text-center">
            <h4 class="heading-decorated">QUE DICEN LOS CLIENTES</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-dots="true" data-nav="false" data-autoplay="true">
                <?php 
                foreach ($obj_testimony as $value) { ?>
                    <div class="item">
                        <div class="quote-default">
                          <div class="quote-default__image">
                              <img src="<?php echo site_url()."static/backoffice/img/testimonios/$value->img";?>" alt="<?php echo $value->name?>"/>
                          </div>
                          <div class="quote-default__text">
                            <p class="q"><?php echo $value->description?></p>
                          </div>
                          <p class="quote-default__cite"><?php echo $value->name;?></p>
                          <p class="q"><?php echo $value->web;?></p>
                        </div>
                    </div>
                    
                <?php } ?>
             
            </div>
          </div>
        </div>
      </section>
      <section class="section-md text-center bg-default">
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;y&quot;: 130, &quot;smoothness&quot;: 30}"><img src="https://livedemo00.template-help.com/wt_69536/images/bg-decor-4.png" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Nuestros Clientes</h4>
          <div class="row row-30">
             <?php 
             foreach ($obj_marcas as $value) { ?>
                    <div class="col-sm-6 col-md-3">
                      <figure class="box-icon-image">
                          <a>
                              <img src="<?php echo site_url()."static/backoffice/img/marcas/$value->img";?>" alt="<?php echo $value->name;?>"/>
                          </a>
                      </figure>
                    </div>
             <?php } ?> 
          </div>
        </div>
      </section>
      <!-- Page Footer -->
     <?php $this->load->view("footer");?>
    </div>
    <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
    <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
  </body>
</html>