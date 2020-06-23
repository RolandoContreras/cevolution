<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="852385984921100"
  theme_color="#6699cc">
      </div>
<section class="pre-footer-corporate bg-image-7 bg-overlay-darkest">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="col-sm-10 col-md-6 col-lg-10 col-xl-4">
              <h6>Acerca</h6>
              <p>Somos una agencia digital que nos especializamos en crear y posicionar marcas trabajando con los mejores profesionales del medio y de esta forma dando vida a tus sueños.</p>
              <img src="<?php echo site_url().'static/page_front/images/logo/logo.png';?>" alt="logo" width="250"/>
            </div>
            
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
              <h6>Servicios</h6>
              <ul class="list-xxs">
                <li><a href="#" class="color-white">Software a Medida</a></li>
                <li><a href="#" class="color-white">Software Multinivel</a></li>
                <li><a href="#" class="color-white">Diseños</a></li>
                <li><a href="#" class="color-white">Creación de Logos</a></li>
                <li><a href="#" class="color-white">Sistemas de Prospección</a></li>
              </ul>
            </div>
              
            <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
              <h6>Contacto</h6>
              <ul class="list-xs">
                <li>
                  <dl class="list-terms-minimal color-white">
                    <dt>Dirección</dt>
                    <dd>Calle Los Antares #320, Trigal - Surco</dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal color-white">
                    <dt>Teléfonos </dt>
                    <dd>
                      <ul class="list-semicolon">
                          <li><a class="color-white"href="#">(51) 929 498 649</a></li>
                          <li><a class="color-white" href="#">(51) 1 409 5566</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal color-white">
                    <dt>E-mail</dt>
                    <dd><a class="color-white" href="#">info@demolink.org</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal color-white">
                    <dt>Comunicación</dt>
                    <dd>24 horas</dd>
                  </dl>
                </li>
              </ul>
            </div>
              <div class="col-sm-10 col-md-6 col-lg-3 col-xl-2">
              <h6>Mapa</h6>
              <ul class="list-xxs">
                <li><a class="color-white" href="<?php echo site_url();?>">Inicio</a></li>
                <li><a class="color-white" href="<?php echo site_url().'demo';?>">DEMO</a></li>
                <li><a class="color-white" href="<?php echo site_url().'servicios';?>">Servicios</a></li>
                <li><a class="color-white" href="<?php echo site_url().'portafolio';?>">Portafolio</a></li>
                <li><a class="color-white" href="<?php echo site_url().'contacto';?>">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section> 
    <footer class="footer-corporate bg-gray-darkest">
        <div class="container">
          <div class="footer-corporate__inner">
            <p class="rights">
                <span>Evolution</span><span>&nbsp;</span>
                <span class="copyright-year"></span>. Todos los derechos reservados.
                <a href="<?php echo site_url().'privacy_policy';?>"><b>Términos y uso de la política de privacidad</b></a></p>
            <ul class="list-inline-xxs">
                <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="https://www.facebook.com/evolucionweb.tech/" target="_blank"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-youtube" href="#"></a></li>
              <li><a class="icon icon-xxs icon-primary fa fa-instagram" href="https://www.instagram.com/evolucion.web/" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </footer>