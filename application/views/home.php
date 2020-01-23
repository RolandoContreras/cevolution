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
                        <a class="button button-black button-shadow" href="#about" data-custom-scroll-to="features">Iniciar Recorrido</a>
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
                    <a class="button button-primary button-shadow" href="#features" data-custom-scroll-to="features">Iniciar Recorrido</a>
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
                          <div class="blurb-minimal__icon"><span class="icon linear-icon-menu3"></span></div>
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
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-rocket"></span></div>
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
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-equalizer"></span></div>
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
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-arrow-down-square"></span></div>
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
              <h4><span class="text-transform-none heading-5">the</span><span class="text-transform-none">FUTURE</span><br><span>is a flexible solution with lots of advantages</span></h4>
              <p>Our template offers you  a variety of elements to be combined.</p>
            </div>
            <div class="col-xl-2 text-xl-right"><a class="button button-primary" target="_blank" href="#">Get it now</a></div>
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
                <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">Todos</a></li>
                <li><a data-isotope-filter="Category_1" data-isotope-group="gallery" href="#">Software</a></li>
                <li><a data-isotope-filter="Category_2" data-isotope-group="gallery" href="#">Diseños</a></li>
              </ul>
              <div class="isotope row" data-isotope-layout="fitRows" data-isotope-group="gallery">
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_2"><a class="img-thumbnail-variant-3" href="single-portfolio.html">
                        <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-5-418x315.jpg" alt="" width="418" height="315"/>
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
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1">
                    <a class="img-thumbnail-variant-3" href="https://livedemo00.template-help.com/wt_69536/images/slider-slide-14-1280x1920.jpg" data-lightgallery="item">
                          <figure>
                              <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-2-418x315.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Objects</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Photo</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_2">
                    <a class="img-thumbnail-variant-3" href="https://livedemo00.template-help.com/wt_69536/images/portfolio-original-9-1920x1282.jpg" data-lightgallery="item">
                          <figure>
                              <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-9-418x315.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption">
                            <span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>People</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Photo</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1">
                    <a class="img-thumbnail-variant-3" href="https://livedemo00.template-help.com/wt_69536/images/portfolio-original-4-1920x1920.jpg" data-lightgallery="item">
                          <figure>
                              <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-4-418x315.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>Objects</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Photo</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1"><a class="img-thumbnail-variant-3" href="single-portfolio.html">
                        <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-1-418x315.jpg" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>9 photos</li>
                              <li>Objects</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Portfolio Album</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-arrow-right"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_2">
                    <a class="img-thumbnail-variant-3" href="https://livedemo00.template-help.com/wt_69536/images/portfolio-original-6-1920x1539.jpg" data-lightgallery="item">
                          <figure>
                              <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-6-418x315.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>People</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Photo</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_2">
                    <a class="img-thumbnail-variant-3" href="https://livedemo00.template-help.com/wt_69536/images/portfolio-original-7-1280x1920.jpg" data-lightgallery="item">
                          <figure>
                              <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-7-418x315.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption">
                              <span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>People</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Photo</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_2">
                    <a class="img-thumbnail-variant-3" href="https://livedemo00.template-help.com/wt_69536/images/portfolio-original-8-1920x1336.jpg" data-lightgallery="item">
                          <figure>
                              <img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-8-418x315.jpg" alt="" width="418" height="315"/>
                          </figure>
                          <div class="caption"><span class="icon hover-top-element linear-icon-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>People</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Photo</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-plus"></span>
                          </div></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 isotope-item" data-filter="Category_1"><a class="img-thumbnail-variant-3" href="single-portfolio.html"><img src="https://livedemo00.template-help.com/wt_69536/images/portfolio-3-418x315.jpg" alt="" width="418" height="315"/><span class="label-custom label-white">Link</span>
                          <div class="caption"><span class="icon hover-top-element linear-icon-folder-picture"></span>
                            <ul class="list-inline-tag hover-top-element">
                              <li>9 photos</li>
                              <li>Objects</li>
                            </ul>
                            <p class="heading-5 hover-top-element">Portfolio Album</p>
                            <div class="divider"></div>
                            <p class="small hover-bottom-element">Creating Portfolio.</p><span class="icon arrow-right linear-icon-arrow-right"></span>
                          </div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- counters-->
      <section class="section parallax-container context-dark" data-parallax-img="https://livedemo00.template-help.com/wt_69536/images/parallax-1.jpg">
        <div class="parallax-content">
          <div class="container section-md">
            <div class="row justify-content-md-center row-50">
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-coffee-cup"></div>
                  <div class="box-counter-main">
                    <div class="counter">100</div>
                  </div>
                  <p class="box-counter-title">Projects Annually</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-cube"></div>
                  <div class="box-counter-main">
                    <div class="counter">45</div>
                  </div>
                  <p class="box-counter-title">Awards</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-chevrons-expand-horizontal"></div>
                  <div class="box-counter-main">
                    <div class="counter">98</div><span>%</span>
                  </div>
                  <p class="box-counter-title">Positive Reviews</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter__icon linear-icon-mustache-glasses"></div>
                  <div class="box-counter-main">
                    <div class="counter">147</div><span>k</span>
                  </div>
                  <p class="box-counter-title">Happy Customers</p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Meet Our Team-->
<!--      <section class="section-md bg-gray-lighter text-center decor-text" data-content="Team">
        <div class="bg-decor d-flex align-items-start" data-parallax-scroll="{&quot;y&quot;: -50,  &quot;smoothness&quot;: 30}"><img src="https://livedemo00.template-help.com/wt_69536/images/bg-decor-7.png" alt=""/>
        </div>
        <div class="container">
          <h4 class="heading-decorated">Meet Our Team</h4>
          <div class="row row-50 offset-top-1">
            <div class="col-md-6 col-lg-4">
               Thumb corporate
              <div class="thumb thumb-corporate">
                <div class="thumb-corporate__main"><img src="https://livedemo00.template-help.com/wt_69536/images/calvin-fitzerald-418x315.jpg" alt="" width="418" height="315"/>
                  <div class="thumb-corporate__overlay">
                    <ul class="list-inline-sm thumb-corporate__list">
                      <li><a class="icon-sm fa-facebook icon" href="#"></a></li>
                      <li><a class="icon-sm fa-twitter icon" href="#"></a></li>
                      <li><a class="icon-sm fa-google-plus icon" href="#"></a></li>
                      <li><a class="icon-sm fa-vimeo icon" href="#"></a></li>
                      <li><a class="icon-sm fa-youtube icon" href="#"></a></li>
                      <li><a class="icon-sm fa-pinterest-p icon" href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="team-member-profile.html">Amanda Smith</a></p>
                  <p class="thumb__subtitle">Director</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
               Thumb corporate
              <div class="thumb thumb-corporate">
                <div class="thumb-corporate__main"><img src="https://livedemo00.template-help.com/wt_69536/images/luis-maxwell-418x415.jpg" alt="" width="418" height="415"/>
                  <div class="thumb-corporate__overlay">
                    <ul class="list-inline-sm thumb-corporate__list">
                      <li><a class="icon-sm fa-facebook icon" href="#"></a></li>
                      <li><a class="icon-sm fa-twitter icon" href="#"></a></li>
                      <li><a class="icon-sm fa-google-plus icon" href="#"></a></li>
                      <li><a class="icon-sm fa-vimeo icon" href="#"></a></li>
                      <li><a class="icon-sm fa-youtube icon" href="#"></a></li>
                      <li><a class="icon-sm fa-pinterest-p icon" href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="team-member-profile.html">Brian King</a></p>
                  <p class="thumb__subtitle">Marketing manager</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
               Thumb corporate
              <div class="thumb thumb-corporate">
                <div class="thumb-corporate__main"><img src="https://livedemo00.template-help.com/wt_69536/images/josh-wagner-418x315.jpg" alt="" width="418" height="315"/>
                  <div class="thumb-corporate__overlay">
                    <ul class="list-inline-sm thumb-corporate__list">
                      <li><a class="icon-sm fa-facebook icon" href="#"></a></li>
                      <li><a class="icon-sm fa-twitter icon" href="#"></a></li>
                      <li><a class="icon-sm fa-google-plus icon" href="#"></a></li>
                      <li><a class="icon-sm fa-vimeo icon" href="#"></a></li>
                      <li><a class="icon-sm fa-youtube icon" href="#"></a></li>
                      <li><a class="icon-sm fa-pinterest-p icon" href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="thumb-corporate__caption">
                  <p class="thumb__title"><a href="team-member-profile.html">George Nelson</a></p>
                  <p class="thumb__subtitle">Designer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->
      <section class="section parallax-container context-dark decor-text" data-parallax-img="https://livedemo00.template-help.com/wt_69536/images/bg-image-6.jpg" data-content="Testimonials">
        <div class="parallax-content"> 
          <div class="container section-lg text-center">
            <h4 class="heading-decorated">WHAT PEOPLE SAY</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-stage-padding="15" data-loop="true" data-margin="30" data-dots="true" data-nav="false" data-autoplay="true">
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="https://livedemo00.template-help.com/wt_69536/images/deborah-quagmire-120x120.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">Since I’m not a real pro in web design, I love to use these ready-made and beautifully looking templates. They are available at very affordable prices and they save you a lot of time, and deliver from a lot of sweat and tears!</p>
                  </div>
                  <p class="quote-default__cite">Jane Smith</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image">
                      <img src="https://livedemo00.template-help.com/wt_69536/images/benedict-arnold-120x120.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">This template has everything I was looking for my business website to have. From easy-to-customize pages to flawlessly working web tools, theFuture is my number one choice!</p>
                  </div>
                  <p class="quote-default__cite">Kate Wilson</p>
                </div>
              </div>
              <div class="item">
                <!-- Quote default-->
                <div class="quote-default">
                  <div class="quote-default__image"><img src="https://livedemo00.template-help.com/wt_69536/images/testimonials-3-120x120.jpg" alt="" width="120" height="120"/>
                  </div>
                  <div class="quote-default__text">
                    <p class="q">Thank you for such an affordable and multipurpose template! It’s easy to configure and use, and what’s more important it looks great. It’s just what I wanted for my website. Keep doing a great job, I’m sure to become a returning customer!</p>
                  </div>
                  <p class="quote-default__cite">Ann Williams</p>
                </div>
              </div>
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
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="#" target="_self">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/evolucion.png';?>" alt="Evolucion Web"/>
                  </a>
              </figure>
            </div>
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="https://mibcacapital.com/" target="_blank">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/bca_capital.png';?>" alt="bca_capital"/>
                  </a>
              </figure>
            </div>
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="http://cerebritodigitalperu.com/" target="_blank">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/cerebrito_digital.png';?>" alt="Cerebrito Digital"/>
                  </a>
              </figure>
            </div>
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="https://culturaimparable.com/" target="_blank">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/cultura_imparable.png';?>" alt="Cultura Imparable"/>
                  </a>
              </figure>
            </div>
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="#" target="_self">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/3t_club.png';?>" alt="3T Club"/>
                  </a>
              </figure>
            </div>
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="#" target="_self">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/golden_team.png';?>" alt="Golden Team"/>
                  </a>
              </figure>
            </div>
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="#" target="_self">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/easy_crypto.png';?>" alt="EasyCrypto"/>
                  </a>
              </figure>
            </div>
            <div class="col-sm-6 col-md-3">
              <figure class="box-icon-image">
                  <a href="#">
                      <img src="<?php echo site_url().'static/backoffice/img/clientes/jaquemete.png';?>" alt="Jaquemente"/>
                  </a>
              </figure>
            </div>
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