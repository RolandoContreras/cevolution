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
        <p>Cargando...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Page header-->
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
                      <h2 class="heading-decorated">Terminos y Política de privacidad</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!-- Privacy Policy-->
      <section class="section-md bg-default">
        <div class="container">
          <!-- Accordion-->
          <div id="accordion" role="tablist">
              <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading8" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse8" aria-controls="accordionCollapse8">Gracias</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse8" role="tabpanel" aria-labelledby="accordionHeading7">
                <div class="card-custom-body">
                  <p>Hemos puesto todo nuestro esfuerzo en el diseño de un sitio Web útil, informativo, fácil de usar, honesto y divertido.</p>
                  <p>Esperamos haberlo conseguido, y le pedimos que no dude en hacernos llegar cualquier comentario acerca de mejoras o cambios que considere que pudieran hacer que sea aún más fácil encontrar la información que desea.</p>
                  <p>Le rogamos se atenga a las siguientes Condiciones de Uso. Tómese un tiempo para revisarlas, porque al usar nuestro sitio Web, se compromete a cumplirlas. Obviamente, si no está de acuerdo con ellas, simplemente no acceda a nuestra Web. Nos reservamos el derecho a realizar en un futuro cualquier cambio que consideremos necesario. Venga de forma regular a esta página para comprobar si ha habido algún cambio. Si tras un cambio, usted sigue utilizando este Sitio Web, se entenderá que está de acuerdo con las modificaciones realizadas en estas Condiciones de Uso.</p>
                  <p>¡MUCHAS GRACIAS POR VISITARNOS!</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading1" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1">Restricciones de uso de nuestros contenidos en línea</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1">
                <div class="card-custom-body">
                  <p>Todos los contenidos de este Sitio Web, incluyendo el texto, software, nombres, logotipos, marcas comerciales, marcas registradas, nombres comerciales, imágenes, fotografías, dibujos, música y vídeos son propiedad intelectual que está protegida por copyright. Todos los derechos de uso son propiedad de, y están controlados por, el/los propietarios de este Sitio Web. Usted, el visitante, puede descargar el contenido en línea únicamente para su uso personal, nunca para uso comercial, siempre y cuando: 1) conserve todos los mensajes de copyright, propiedad intelectual y marcas comerciales, 2) no realice modificaciones a los mismos, 3) no haga uso de los contenidos de forma que pudiera parecer que está vinculado con alguno de nuestros productos, servicios, eventos o marcas, y 4) no descargue grandes cantidades de contenidos para almacenarlos en una base de datos, servidor, u ordenador personal para su uso con fines comerciales. No obstante, usted no está autorizado, bajo ningún concepto, a copiar, reproducir, publicar, tanto físicamente como en la Web, transmitir o distribuir los contenidos en línea, a no ser que haya solicitado y obtenido, por escrito, nuestra autorización expresa. Tampoco podrá añadir, eliminar, alterar o tergiversar cualquier contenido de esta Web. Se prohíbe expresamente cualquier intento de modificar cualquier material en línea, o de forzar o evadir nuestras medidas de seguridad.</p>
                  <p>Los derechos de uso de todo aquello que descargue, cualquier software, incluyendo todos sus ficheros, las imágenes incorporadas o generadas por dicho software, así como todos los datos que incluyen, le son cedidos por este Sitio Web, o por los propietarios de los mismos. para su uso personal, no para fines comerciales. Esto no quiere decir que le cedamos la propiedad de los mismos; es decir, que nos reservamos la propiedad del software y todos sus derechos de propiedad intelectual asociados. Usted no está autorizado a revender o vender el material ni a utilizar técnicas de ingeniería inversa, descompilar o desensamblar el software, o convertirlo a cualquier otro formato que permitiera su uso por parte de terceros.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading2" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2">Envío de sus propios contenidos a este Sitio Web</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2">
                <div class="card-custom-body">
                  <p>Usted acepta que todas aquellas observaciones, sugerencias, ideas, gráficos, observaciones o cualquier otra información que nos envíe a través de nuestra Web, excepto aquella información que nos comprometemos a proteger bajo nuestra política de privacidad, pasarán a ser propiedad nuestra, incluso en el caso de que el presente acuerdo se extinga en el futuro.</p>
                  <p>Esto quiere decir que no tendremos la obligación de tratar ningún envío de material como confidencial. Usted declina todo derecho a denunciarnos por el uso que podamos hacer de las ideas que nos pueda haber enviado. El uso de estas ideas, o unas similares, no nos obligará, de manera alguna, al pago de cantidad alguna, ni a usted, ni a terceras personas. Por el simple hecho de habernos enviado cualquier información, usted nos cede los plenos derechos de propiedad, en exclusividad, presentes y futuros, sobre los mismos, sean del tipo que sean. Los podremos usar para cualquier propósito que consideremos apropiado, sin necesidad de compensación económica alguna, ni a usted ni a terceros, por ello.</p>
                  <p>Usted reconoce ser responsable de cualquier envío que haga. Esto quiere decir que usted, y no nosotros, será el único responsable del contenido de esos mensajes, lo cual comprende, entre otros, su legalidad, fiabilidad, corrección, originalidad y los derechos de copia de los mismos.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading3" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3">Limitaciones de Responsabilidad</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3">
                <div class="card-custom-body">
                  <p>Este Sitio Web DECLINA TODA RESPONSABILIDAD POR DAÑOS O LESIONES QUE RESULTEN DEL USO QUE USTED HAGA DE CUALQUIER PÁGINA DE NUESTRA WEB.</p>
                  <p>ESTO INCLUYE, EXPRESA O IMPLÍCITAMENTE, DAÑOS O LESIONES CAUSADAS POR:</p>
                  <ul>
                      <li>- EL USO (O IMPOSIBILIDAD DE USO) DE NUESTRA WEB</li>
                      <li>- EL USO (O IMPOSIBILIDAD DE USO) DE CUALQUIER SITIO WEB AL CUAL ENLACEMOS DESDE NUESTRAS PÁGINAS</li>
                      <li>- LA IMPOSIBILIDAD DE QUE NUESTRA WEB SE COMPORTE DE LA FORMA QUE USTED ESPERA O DESEA</li>
                      <li>- CUALQUIER ERROR EN NUESTRA WEB</li>
                      <li>- OMISIONES EN NUESTRA WEB</li>
                      <li>- LA INTERRUPCIÓN DE LA DISPONIBILIDAD DE NUESTRO SITIO WEB</li>
                      <li>- FALLOS EN NUESTRA WEB</li>
                      <li>- RETRASOS EN EL FUNCIONAMIENTO O EN LA TRANSMISIÓN DE DATOS A/DESDE NUESTRA WEB</li>
                      <li>- VIRUS INFORMÁTICOS O FALLOS EN LA LÍNEA</li>
                      <li>- TENGA PRESENTE QUE NO NOS HACEMOS RESPONSABLES DE NINGÚN DAÑO, INCLUYENDO:</li>
                      <li>- DAÑOS PROVOCADOS CON LA INTENCIÓN DE COMPENSAR A ALGUIEN POR UNA PÉRDIDA O LESIÓN</li>
                      <li>- DAÑOS QUE RAZONABLEMENTE PUEDAN RESULTAR DE UNA PÉRDIDA O LESIÓN (DAÑOS RESULTANTES)</li>
                      <li>- OTRO TIPO DE DAÑOS O GASTOS QUE SE DERIVEN DIRECTAMENTE DE UNA PÉRDIDA O LESIÓN (DAÑOS FORTUITOS)</li>
                  </ul>
                  <p>DECLINAMOS CUALQUIER RESPONSABILIDAD, INCLUSO EN EL CASO DE NEGLIGENCIA POR NUESTRA PARTE, O SI ALGUNO DE NUESTROS AGENTES OFICIALES CONOCIERA LA POSIBILIDAD DE QUE PUDIERAN PRODUCIRSE DICHOS DAÑOS, O AMBOS.</p>
                  <p>EXCEPCIONES: ALGUNAS LEYES PUEDEN PROHIBIR LA LIMITACIÓN O LA EXCLUSIÓN DE RESPONSABILIDADES POR ESOS DAÑOS RESULTANTES O FORTUITOS. SI VIVE EN ALGÚN LUGAR DONDE DICHAS LEYES ESTÉN EN VIGOR, OBVIAMENTE, DICHA LIMITACIÓN NO EXISTE; POR LO TANTO, USTED TENDRÍA EL DERECHO A PERCIBIR UNA INDEMNIZACIÓN EN CASO DE SUFRIR ALGUNO DE ESOS DAÑOS.</p>
                  <p>SIN EMBARGO, NUESTRA RESPONSABILIDAD, EN CUALQUIER CASO, POR CUALQUIER PERDIDA, DAÑO, LESIÓN Y DEMANDAS DE CUALQUIER TIPO, SEAN ÉSTOS RECLAMADOS BAJO LOS TÉRMINOS DE UN CONTRATO, A CONSECUENCIA DE UNA NEGLIGENCIA U OTRA CONDUCTA INCORRECTA, O BAJO CUALQUIER OTRO FUNDAMENTO LEGAL, NO PODRÁ SUPERAR EL IMPORTE QUE USTED HAYA SATISFECHO, EN SU CASO, PARA OBTENER EL ACCESO A NUESTRA WEB.</p>
                </div>
              </div>
            </div>
            
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading4" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse4" aria-controls="accordionCollapse4">Enlaces a otras webs</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse4" role="tabpanel" aria-labelledby="accordionHeading4">
                <div class="card-custom-body">
                  <p>Es posible que, en nuestra Web, hagamos recomendaciones y/o incluyamos enlaces a otras páginas de Internet. Dicho enlace no debe entenderse como una suscripción, aprobación o acuerdo alguno con la información o los recursos que sean ofrecidos en dichas páginas. En caso de duda, compruebe la URL (dirección de la página Web) que aparece en su navegador, para conocer si usted se encuentra en una página dentro de este Sitio Web, o si por el contrario, se encuentra dentro de cualquier otra Web. Este Sitio Web no se responsabiliza del contenido incluido, o los procedimientos utilizados, en webs de terceros que tengan un enlace desde este Sitio Web. El que este Sitio Web incluya enlaces a otras webs, no debe entenderse como que este Sitio Web está conectado, gestiona o controla esas webs. Cualquier enlace no representa, en ningún caso, ni explicita ni implícitamente, la aprobación, el respaldo o el apoyo de cualquier Web de este Sitio Web, ni la aprobación, el respaldo o el apoyo de este Sitio Web, incluyendo a sus respectivos empleados, representantes o directivos.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading5" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse5" aria-controls="accordionCollapse5">Extinción del presente Contrato</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse5" role="tabpanel" aria-labelledby="accordionHeading5">
                <div class="card-custom-body">
                  <p>Este contrato será efectivo hasta su extinción por cualquiera de las partes. Usted puede acabar el presente contrato en cualquier momento, destruyendo cualquier material que haya descargado de la Web este Sitio Web, incluyendo cualquier documentación asociada y todas las copias e instalaciones. Este Sitio Web puede dar por finalizado el presente contrato en cualquier momento, sin necesidad de previo aviso, el caso de que, a su propio juicio, usted haya violado alguna de las condiciones del mismo. Tras la extinción, usted deberá destruir cualquier material referido en el presente contrato. Por otra parte, la publicación de contenidos en nuestra Web no implica, en modo alguno, que dichos contenidos vayan a estar disponibles en un futuro. Asimismo, este Sitio Web se reserva el derecho a suprimir, sin previo aviso, parte o la totalidad de su Web</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading6" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse6" aria-controls="accordionCollapse6">Jurisdicción y otras consideraciones</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse6" role="tabpanel" aria-labelledby="accordionHeading6">
                <div class="card-custom-body">
                  <p>Usted será responsable del cumplimiento de cualquier ley que le sea aplicable por acceder a este Sitio Web desde su país.</p>
                  <p>Las presentes Condiciones de Uso estarán regidas, serán interpretadas y aplicadas, de acuerdo con las leyes de la Ciudad de Roma (Italia), y será de aplicación a los contratos suscritos y ejecutados en su totalidad dentro de esa jurisdicción.</p>
                  <p>En caso de que usted haya violado, o haya amenazado con violar, los derechos de propiedad intelectual de este Sitio Web o los de sus empresas afiliadas, este Sitio Web y/o sus empresas afiliadas podrán emprender acciones legales contra usted en cualquier tribunal estatal o federal del Estado de la Ciudad de Roma (Italia). Asimismo, usted se somete expresamente a la jurisdicción de los juzgados y tribunales antes citados.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading7" role="tab">
                <h5 class="card-custom-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse7" aria-controls="accordionCollapse7">Cualquier otro conflicto será resuelto de la siguiente forma:</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse7" role="tabpanel" aria-labelledby="accordionHeading7">
                <div class="card-custom-body">
                  <p>Si la disputa se origina por los términos del presente contrato, ambas partes tratarán de resolverlo a través de un mediador, pactado por ambas partes, en la Ciudad de Lima (Perú). Cualquier gasto u honorario asociado con la mediación, excepto los honorarios de un abogado, serán devengados, a partes iguales, entre ambas partes.</p>
                  <p>Si se considera que a través de la mediación es imposible llegar a una solución satisfactoria para ambas partes, las partes acuerdan resolver el conflicto a través de un arbitraje vinculante en la Ciudad de Lima (Perú), bajo los reglamentos de la Asociación Americana de Arbitraje (American Arbitration Association). El fallo de la resolución tomada por el arbitraje puede ser apelado ante cualquier tribunal con competencias para ello.</p>
                  <p>Este Sitio Web se reserva el derecho de modificar sin previo aviso estas Condiciones de Uso, así como el contrato que estas suponen, mediante la sola actualización de este texto. Este es el contrato, en su TOTALIDAD, en cuanto a los temas en él tratados.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
     <?php $this->load->view("footer");?> 
    </div>
    <!-- Javascript-->
    <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
    <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
  </body>
</html>