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
      <!-- Parallax header-->
      <section>
        <section class="section parallax-container context-dark" data-parallax-img="<?php echo site_url().'static/page_front/images/header_image.jpg';?>">
          <div class="parallax-content parallax-header">
            <div class="parallax-header__inner context-dark">
              <div class="parallax-header__content">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-xl-8">
                      <h2 class="heading-decorated">Nuestros Servicios</h2>
                      <p class="heading-6">Conoce las características de nuestros softwares.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!-- Our Services-->
      <section class="section-md bg-default text-center decor-text" data-content="Services">
        <div class="container">
          <h4 class="heading-decorated">Servicios</h4>
          <div class="row row-50 justify-content-md-center justify-content-lg-start">
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-pencil-ruler"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Sistemas Administrativos</a>
                    </p>
                    <p>Lleva el control total de las ventas y el crecimiento de tu negocio, te diseñamos diagramas de crecimiento y todo lo que necesites.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-users"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Sistemas de Prospección</a>
                    </p>
                    <p>No basta con solo tener un producto, necesitas herramientas informáticas y nuevos canales de ventas a través de la web.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-wall"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Software Multinivel a Medida</a>
                    </p>
                    <p>Si conoces acerca de la industria del multinivel y quieres emprender tomando las riendas del negocio, nosotros te asesoramos y nos alianzamos a tu visión y a crear tu software.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon">
                        <span class="icon linear-icon-apartment"></span>
                    </div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Aplicativos</a>
                    </p>
                    <p>Muy pronto tendremos esta nueva sección para todos nuestros clientes, tu visión de hacer tu negocio ahora en tus posibilidades</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-home4"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Landing Page</a>
                    </p>
                    <p>Necesita una página web rápida e intuitiva y entonces la solución es tener una Landing, página de una sola cara y muy concisa para el cliente.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle -->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-pencil-ruler2"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Plataformas de Cursos Online</a>
                    </p>
                    <p>Tienes conocimiento que necesitas que se vendan al mundo, una escuela, universidad, entonces necesitas una plataforma online.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-magic-wand"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Tu web en aplicativo (PWA)</a>
                    </p>
                    <p>Si tienes un software creado y quieres que también sea un aplicativo, nosotros lo configuramos para que también tengo su app soñada.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-menu3"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Tienda Online</a>
                    </p>
                    <p>Es momento de vender por el internet, las ventas tradicionales son buenas pero con en este nueva era necesitas mostrar tu marca al mundo.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left"> 
                    <div class="blurb-minimal__icon"><span class="icon linear-icon-users2"></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6">
                        <a>Marketing Multimedia</a>
                    </p>
                    <p>Si deseas posicionar tu marca, tener tu logotipo, vídeos y todo lo que necesites, nosotros te asesoramos con nuestros expertos.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Call to Action-->
      <section class="section-sm bg-accent text-center">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-xl-9 text-xl-left">
                <h4 class="heading-decorated">    Si ya estás cansado de no tener resultados.  <br/>Únete a los mejores profesionales del medio.</h4>
            </div>
              <div class="col-xl-2 text-xl-right">
                  <a class="button button-primary" href="<?php echo site_url()."contacto"?>">Contacto</a>
              </div>
          </div>
        </div>
      </section>
      <!--faq-->
      <section class="section-md bg-default"> 
        <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;x&quot;: -100, &quot;y&quot;: -30, &quot;smoothness&quot;: 30}" style="transform:translate3d(-100px, -30px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(-100px, -30px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); "><img src="images/bg-decor-9.png" alt="">
        </div>
        <div class="container">
          <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
            <div class="col-md-8 col-lg-6">
              <div id="accordion" role="tablist">
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading1" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1">What are the advantages of purchasing a website template?</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1">
                          <div class="card-custom-body">
                            <p>The major advantage is price: You get a high quality design for just $20-$70. You don’t have to hire a web designer or web design studio. Second advantage is time frame: It usually takes 5-15 days for a good designer to produce a web page of such quality.</p>
                          </div>
                        </div>
                      </div>
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading2" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2">Do you provide any scripts with your templates or could you do some custom programming?</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2">
                          <div class="card-custom-body">
                            <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields, forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can be easily added at zemez.io If you are not sure that the element you’re interested in is active please contact our Support Chat for clarification.</p>
                          </div>
                        </div>
                      </div>
                      <!-- Bootstrap card-->
                      <div class="card card-custom">
                        <div class="card-custom-heading" id="accordionHeading3" role="tab">
                          <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3">In what formats are your templates available?</a>
                          </h5>
                        </div>
                        <div class="card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3">
                          <div class="card-custom-body">
                            <p>Website templates are available in Photoshop and HTML formats. Fonts are included with Photoshop file. In most templates HTML is compatible with Adobe®, Dreamweaver® and Microsoft Frontpage®.</p>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-5">
              <figure class="button-shadow"><img src="images/home-variant-3-555x800.jpg" alt="" width="555" height="800">
              </figure>
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