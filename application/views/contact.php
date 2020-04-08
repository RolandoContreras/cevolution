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
  <!-- Parallax header-->
  <section>
      <section class="section parallax-container context-dark" data-parallax-img="<?php echo site_url().'static/page_front/images/header_image.jpg';?>">
      <div class="parallax-content parallax-header">
        <div class="parallax-header__inner context-dark">
          <div class="parallax-header__content">
            <div class="container">
              <div class="row justify-content-sm-center">
                <div class="col-md-10 col-xl-8">
                  <h2 class="heading-decorated">Contacto</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <section class="section-md bg-default decor-text" data-content="Contact">
    <div class="container">
      <div class="row row-50">
        <div class="col-md-5 col-lg-4">
          <h4 class="heading-decorated">Más Información</h4>
          <ul class="list-sm contact-info">
            <li>
              <dl class="list-terms-inline"> <dt>Dirección</dt>
                <dd>Calle Antares #320 Of. 606, Centro Empresarial El Trigal - Surco</dd>
              </dl>
            </li>
            <li>
              <dl class="list-terms-inline"> <dt>Teléfonos</dt>
                <dd>
                  <ul class="list-semicolon">
                    <li><a href="tel:#">(51) 923 351 648</a></li>
                    <li><a href="tel:#">(01) 409 5566</a></li>
                  </ul>
                </dd>
              </dl>
            </li>
            <li>
              <dl class="list-terms-inline"> <dt>Abrimos</dt>
                <dd>L-V: 10am -6pm</dd>
              </dl>
            </li>
            <li>
              <ul class="list-inline-sm">
                <li>
                  <a class="icon-sm fa-facebook icon" href="#"></a>
                </li>
                <li>
                  <a class="icon-sm fa-youtube icon" href="#"></a>
                </li>
                <li>
                  <a class="icon-sm fa-instagram icon" href="#"></a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="heading-decorated">Mantente en contacto</h4>
          <!-- RD Mailform-->
          <form class="rd-mailform rd-mailform_style-1 form-shadow" method="post" onsubmit="send_message();">
            <div class="form-wrap form-wrap_icon">
                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required"> 
                <label class="form-label" for="contact-name">Tu Nombre</label>              
            </div>
            <div class="form-wrap form-wrap_icon"> 
                <input class="form-input" id="contact-subject" type="text" name="subject" data-constraints="@Required"> 
                <label class="form-label" for="contact-subject">Asunto</label>              
            </div>
            <div class="form-wrap form-wrap_icon"> 
                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required"> 
                <label class="form-label" for="contact-email">Tu Email</label>              
            </div>
            <div class="form-wrap form-wrap_icon"> 
                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea> 
                <label class="form-label" for="contact-message">Tu Mensaje</label>              
            </div> 
            <div class="row">
              <div class="col">
                    <div class="g-recaptcha" data-sitekey="6Lc67ecUAAAAACsHd6dEfMsbhVAXWy4CCNwZFh3j"></div>
              </div>
                <div class="col">
                    <div id="respose"></div>
              </div>
            </div>
            <button class="button button-primary button-shadow" type="submit">Enviar Mensaje</button> 
          </form>
        </div>
      </div>
    </div>
  </section>
 <!-- Page Footer -->
     <?php $this->load->view("footer");?>
    </div>
    <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
    <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
    <script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
<!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');
</script>
<!-- End Google Tag Manager -->
</html>
