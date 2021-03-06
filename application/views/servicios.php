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
            <!-- PANEL-->
            <?php $this->load->view("header"); ?>
            <!-- Parallax header-->
            <section>
                <section class="section parallax-container context-dark" data-parallax-img="<?php echo site_url() . 'static/page_front/images/header_image.jpg'; ?>">
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
                            <a class="button button-primary" href="<?php echo site_url() . "contacto" ?>">Contacto</a>
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
            <!--faq-->
            <section class="section-md bg-default"> 
                <div class="bg-decor d-flex align-items-center justify-content-end" data-parallax-scroll="{&quot;x&quot;: -100, &quot;y&quot;: -30, &quot;smoothness&quot;: 30}" style="transform:translate3d(-100px, -30px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(-100px, -30px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                    <img data-src="<?php echo site_url() . "static/page_front/images/bg-decor-9.png"; ?>" class="lazyload" alt="Preguntas frecuentes">
                </div>
                <div class="container">
                    <div class="row justify-content-md-center justify-content-lg-between row-50 align-items-center">
                        <div class="col-md-8 col-lg-6">
                            <div id="accordion" role="tablist">
                                <!-- Bootstrap card-->
                                <div class="card card-custom">
                                    <div class="card-custom-heading" id="accordionHeading1" role="tab">
                                        <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1">¿Por qué necesito una página o sistema web?</a>
                                        </h5>
                                    </div>
                                    <div class="card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1">
                                        <div class="card-custom-body">
                                            <p>Desde hace muchos años atrás vivimos en la era de la información, los negocios como los conocíamos han cambiado, a raíz del internet todo esta globalizado, si ahora un empresario quiere extender sus horizontes y no caer en la ruina necesita “Estar en el internet, sino esta en ningún lado”. 
                                                El éxito de las grandes marcas es porque se posicionaron en el internet antes que todos, y ahora es tu oportunidad para que también tu marca esté presente en el mundo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bootstrap card-->
                                <div class="card card-custom">
                                    <div class="card-custom-heading" id="accordionHeading2" role="tab">
                                        <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2">¿Por qué elegir a Evolución Web?</a>
                                        </h5>
                                    </div>
                                    <div class="card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2">
                                        <div class="card-custom-body">
                                            <p>Nuestra agencia digital sale de una problemática que hay en el mundo, el miedo o la falta de información de entrar a la era digital. Analizamos muchos casos de empresarios que necesitaban expandirse, pero no eran orientados correctamente para poder llevar a cabo su meta.
                                                Nosotros nacemos con principios firmes y beneficios para nuestros clientes
                                                1.	Costos Asequibles
                                                2.	Profesionales altamente calificados
                                                3.	Amor a nuestros proyectos
                                                4.	Atención personalizada a cada cliente.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bootstrap card-->
                                <div class="card card-custom">
                                    <div class="card-custom-heading" id="accordionHeading3" role="tab">
                                        <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3">¿Cuáles son las características de nuestros productos?</a>
                                        </h5>
                                    </div>
                                    <div class="card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3">
                                        <div class="card-custom-body">
                                            <p>1.	Softwares a medida
                                                No es lo mismo comprar ropa de diseñador a ropa en un supermercado. De la misma forma funcionan los softwares. Creamos software a medida del cliente, en base a sus necesidades y proyecciones a futuro, softwares exclusivos que nadie más tendrá.<br/><br/>

                                                2.	Profesionales expertos a tu servicio
                                                Cuando eres parte de EVOLUCION tienes un grupo extenso de profesionales a tu servicio empezando por diseñadores gráficos hasta abogados especialistas en leyes. Siempre tendrás a un profesional de EVOLUCION respaldando tu negocio.<br/><br/>

                                                3.	Productos creados para actualizarse
                                                Creamos nuestros productos con la base de la actualización, la tecnología avanza y por lo tanto tu negocio debería de actualizarse también, nuestros expertos constantemente estarán actualizando tu producto ya que han sido creados para el crecimiento.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bootstrap card-->
                                <div class="card card-custom">
                                    <div class="card-custom-heading" id="accordionHeading4" role="tab">
                                        <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse4" aria-controls="accordionCollapse4">¿Puedo tener reuniones con evolución web antes de contratar?</a>
                                        </h5>
                                    </div>
                                    <div class="card-custom-collapse collapse" id="accordionCollapse4" role="tabpanel" aria-labelledby="accordionHeading4">
                                        <div class="card-custom-body">
                                            <p>
                                                Creamos nuestros productos con la base de la actualización, la tecnología avanza y por lo tanto tu negocio debería de actualizarse también, nuestros expertos constantemente estarán actualizando tu producto ya que han sido creados para el crecimiento.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bootstrap card-->
                                <div class="card card-custom">
                                    <div class="card-custom-heading" id="accordionHeading5" role="tab">
                                        <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse5" aria-controls="accordionCollapse5">¿Cuáles son nuestras especialidades?</a>
                                        </h5>
                                    </div>
                                    <div class="card-custom-collapse collapse" id="accordionCollapse5" role="tabpanel" aria-labelledby="accordionHeading5">
                                        <div class="card-custom-body">
                                            <p>
                                                Nosotros trabajamos en toda el área informática y marketing (agencia digital). Contamos con un staff de profesionales en la informática, marketing y empresarios.
                                                Nuestro trabajo es orientarte en todo el proceso de posicionamiento de tu marca, desde la creación del software o sistema web, hasta el punto de ayudarte a posicionarlo internacionalmente.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bootstrap card-->
                                <div class="card card-custom">
                                    <div class="card-custom-heading" id="accordionHeading6" role="tab">
                                        <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse6" aria-controls="accordionCollapse5">¿Si ya tengo creado una página web, puedo igual contratar con Evolución Web?</a>
                                        </h5>
                                    </div>
                                    <div class="card-custom-collapse collapse" id="accordionCollapse6" role="tabpanel" aria-labelledby="accordionHeading6">
                                        <div class="card-custom-body">
                                            <p>
                                                Si, si anteriormente tenías una página web y deseas seguir usándola, nosotros podemos actualizarla y seguir el trabajo previamente realizado de esta forma repotenciándolo o haciendo un cambio completo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-5">
                            <figure class="button-shadow">
                                <img data-src="<?php echo site_url() . "static/page_front/images/faq.jpg" ?>" class="lazyload" alt="Preguntas Frecuentes" width="555" height="800">
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
        <script src="<?php echo site_url() . 'static/page_front/js/seo/lazysizes.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'static/page_front/js/core.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'static/page_front/js/script.js'; ?>"></script>
    </body>
</html>
