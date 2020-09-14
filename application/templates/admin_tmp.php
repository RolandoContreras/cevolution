<!DOCTYPE html>
<html lang="es">
<head>
  <title>Dashboard - Evolucion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Somos una agencia digital que nos especializamos en crear, posicionar marcas y construir softwares multinivel trabajando con los mejores profesionales del medio.">
    <meta name="author" content="Evolucion">
    <meta name="keyword" content="Evolucion, evolucion web, sistemas multinivel, creación de software multinivlel, sistemas de prospeccion, creación paginas web, creador sistemas mlm, diseños publicitario, diseño grafico, plan de compensación, diseños de logo, diseño de plan de pagos">
    <!-- favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url().'static/page_front/images/logo/favicon/apple-touch-icon.png';?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url().'static/page_front/images/logo/favicon/favicon-32x32.png';?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url().'static/page_front/images/logo/favicon/favicon-16x16.png';?>">
    <link rel="manifest" href="<?php echo site_url().'static/page_front/images/logo/favicon/site.webmanifest';?>">
    <!-- Stylesheets-->
  <link rel="stylesheet" href="<?php echo site_url().'static/cms/css/style.css';?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="<?php echo site_url().'static/cms/css/animate.min.css';?>">
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script type="text/javascript">
    var site = '<?php echo site_url();?>';
  </script>
  <script src="<?php echo site_url().'static/cms/js/core/bootbox.all.min.js';?>"></script>
  <script src="<?php echo site_url().'static/cms/js/core/jquery-1.11.1.min.js';?>"></script>
  <script src="<?php echo site_url().'static/cms/js/core/bootstrap.min.js';?>"></script>
  <link rel="stylesheet" href="<?php echo site_url().'static/cms/css/core/bootstrap-datepicker3.min.css';?>">
  <!--//swetaler2-->
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
  <script>
        var page = {
            bootstrap: 3
        };

        function swap_bs() {
            page.bootstrap = 3;
        }
    </script>
    <style>
        .datepicker>.datepicker-days {
            display: block;
        }
        ol.linenums {
            margin: 0 0 0 -8px;
        }
    </style>
  
</head>

<body class="layout-6" style="background-image: url('<?php echo site_url().'static/page_front/images/header_image.jpg';?>'); background-size: cover;">
  <nav class="pcoded-navbar menu-light brand-lightblue menupos-static">
    <div class="navbar-wrapper">
      <div class="navbar-brand header-logo">
          <a href="<?php echo site_url().'course';?>" class="b-brand">
          <div class="b-bg">
              <img src="<?php echo site_url().'static/page_front/images/logo/logo_face.png';?>" alt="Logo" width="40"/>
          </div>
              <span class="b-title">Evolución Web</span>
          </a>
          <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a></div>
      <div class="navbar-content scroll-div">
       <ul class="nav pcoded-inner-navbar">
          <li class="nav-item pcoded-menu-caption"><label>Navegación</label></li>
          <?php
          $url = explode("/",uri_string());
            if(isset($url[1])){
                $nav = $url[1];
            }else{
                $nav = "";
            }
            $panel_syle = "";
            $marketing_syle = "";
            $mantenimiento_syle = "";
            switch ($nav) {
                case "panel":
                    $panel_syle = "active";
                    break;
                case "marketing":
                    $marketing_syle = "active";
                    break;
                default:
                    $mantenimiento_syle = "active";
                    break;
            }
          ?>
          <li class="nav-item">
              <a href="<?php echo site_url().'dashboard/panel';?>" class="nav-link <?php echo $panel_syle;?>">
                  <span class="pcoded-micon">
                       <i data-feather="home"></i>
                  </span>
                  <span class="pcoded-mtext">Panel</span>
              </a>
        </li>
        <li class="nav-item pcoded-menu-caption"><label>Mantenimientos</label></li>
        <li class="nav-item pcoded-hasmenu">
            <a href="#!" class="<?php echo $mantenimiento_syle;?>">
                <span class="pcoded-micon">
                    <i data-feather="sliders"></i>
                </span>
                <span class="pcoded-mtext">Mantenimientos</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="pcoded-hasmenu"><a href="<?php echo site_url()."dashboard/categorias";?>"><i class="icon-large icon-th"></i>Categorías</a></li>
                <li class="pcoded-hasmenu"><a href="<?php echo site_url()."dashboard/comentarios";?>"><i class="icon-large icon-th"></i>Comentarios</a></li>
                <li class="pcoded-hasmenu"><a href="<?php echo site_url()."dashboard/disenos";?>"><i class="icon-large icon-th"></i>Diseños</a></li>
                <li class="pcoded-hasmenu"><a href="<?php echo site_url()."dashboard/marcas";?>"><i class="icon-large icon-th"></i>Marcas</a></li>
                <li class="pcoded-hasmenu"><a href="<?php echo site_url()."dashboard/testimonios";?>"><i class="icon-large icon-th"></i>Testimonios</a></li>
                <li class="pcoded-hasmenu"><a href="<?php echo site_url()."dashboard/software";?>"><i class="icon-large icon-th"></i>Software</a></li>
                <?php if($_SESSION['usercms']['privilage'] > 1){ ?>
                <li class="pcoded-hasmenu" ><a href="<?php echo site_url()."dashboard/usuarios";?>"><i class="icon-large icon-th"></i>Usuarios</a></li>
                <?php } ?>
            </ul>
        </li>
        <li class="nav-item pcoded-menu-caption"><label>Email Marketing</label></li>
        <li class="nav-item pcoded-hasmenu">
            <a href="<?php echo site_url().'dashboard/marketing'?>" class="<?php echo $marketing_syle;?>">
                <span class="pcoded-micon">
                    <i data-feather="mail"></i>
                </span>
                <span class="pcoded-mtext">Email Marketing</span>
            </a>
        </li>
    </ul>
    </div>
    </div>
  </nav>
  <header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header"><a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="<?php echo site_url().'course';?>" class="b-brand">
        <div class="b-bg">
            <img src="<?php echo site_url().'static/page_front/images/logo/logo_face.png';?>" alt="Logo" width="40"/>
        </div>
            <span class="b-title">Evolucion Web</span></a>
    </div>
      <a class="mobile-menu" id="mobile-header" href="#!">
          <i class="feather icon-more-horizontal"></i>
      </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li>
            <a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()">
                <i data-feather="maximize"></i>
            </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li>
          <div class="dropdown drp-user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i data-feather="settings"></i>
              </a>
            <div class="dropdown-menu dropdown-menu-right profile-notification">
              <div class="pro-head">
                  <span><?php echo $_SESSION['usercms']['name'];?></span>
              </div>
              <ul class="pro-body">
                <li>
                    <a href="<?php echo site_url().'login/logout';?>" class="dropdown-item"><i data-feather="power"></i> Salir</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </header>
  <?php echo $body;?>
<!--[if lt IE 11]> <div class="ie-warning"> <h1>Warning!!</h1> <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website. </p> <div class="iew-container"> <ul class="iew-download"> <li> <a href="http://www.google.com/chrome/"> <img src="../assets/images/browser/chrome.png" alt="Chrome"> <div>Chrome</div> </a> </li> <li> <a href="https://www.mozilla.org/en-US/firefox/new/"> <img src="../assets/images/browser/firefox.png" alt="Firefox"> <div>Firefox</div> </a> </li> <li> <a href="http://www.opera.com"> <img src="../assets/images/browser/opera.png" alt="Opera"> <div>Opera</div> </a> </li> <li> <a href="https://www.apple.com/safari/"> <img src="../assets/images/browser/safari.png" alt="Safari"> <div>Safari</div> </a> </li> <li> <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie"> <img src="../assets/images/browser/ie.png" alt=""> <div>IE (11 & above)</div> </a> </li> </ul> </div> <p>Sorry for the inconvenience!</p> </div> <![endif]-->
<script src="<?php echo site_url().'static/cms/js/core/vendor-all.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/pcoded.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/ekko-lightbox.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/ac-lightbox.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/datatables.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/tbl-datatable-custom.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery.flot.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery.flot.categories.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery.flot.tooltip.min.js';?>"></script>
<script>
  feather.replace();
</script>
<script src="<?php echo site_url().'static/cms/js/core/bootstrap-datepicker.min.js';?>"></script>    
<script src="<?php echo site_url().'static/cms/js/core/ac-datepicker.js';?>"></script>  
</body>
</html>