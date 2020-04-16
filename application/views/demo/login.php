<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DEMO -  EVOLUCION WEB</title>
        <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="CodedThemes" />
        <!-- favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url() . 'static/page_front/images/logo/favicon/apple-touch-icon.png'; ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url() . 'static/page_front/images/logo/favicon/favicon-32x32.png'; ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url() . 'static/page_front/images/logo/favicon/favicon-16x16.png'; ?>">
        <link rel="manifest" href="<?php echo site_url() . 'static/page_front/images/logo/favicon/site.webmanifest'; ?>">
        <!--styless-->
        <link rel="stylesheet" href="<?php echo site_url() . 'static/demo/css/font-awesome-4.7.0/css/font-awesome.css'; ?>">
        <link rel="stylesheet" href="<?php echo site_url() . 'static/demo/css/animate.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo site_url() . 'static/demo/css/style.css'; ?>">
        <link rel="stylesheet" href="<?php echo site_url() . 'static/demo/plugins/bootstrap.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo site_url() . 'static/demo/plugins/jquery-scrollbar/css/perfect-scrollbar.css'; ?>">
        <link rel="stylesheet" href="<?php echo site_url() . 'static/demo/fonts/datta/datta-icon.css'; ?>">
        <link href="<?php echo site_url() . 'static/demo/css/feather/feather.css'; ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="auth-wrapper">
            <div class="auth-content">
                <div class="auth-bg">
                    <span class="r"></span>
                    <span class="r s"></span>
                    <span class="r s"></span>
                    <span class="r"></span>
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather-unlock auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Iniciar Sesión</h3>
                        <div class="alert alert-primary" role="alert">
                            <b>Usuario:</b> demo<br/>
                            <b>Password:</b> demo
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="username" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" id="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group text-left">
                                <div class="new-task">
                                    <div class="to-do-list mb-4">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" checked="checked">
                                                <span class="cr mr-3">
                                                    <i class="cr-icon fa fa-check txt-primary" aria-hidden="true"></i>
                                                </span>
                                                Guardar Credenciales
                                            </label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Iniciar Sesión</button>
                        <p class="mb-2 text-muted">¿Olvidaste tu contraseña? <a href="auth-reset-password.html">Reiniciar</a></p>
                        <p class="mb-0 text-muted">¿Aún no tienes una cuenta? <a href="auth-signup.html">Registrar</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo site_url() . 'static/demo/js/vendor-all.min.js';?>"></script>
        <script src="<?php echo site_url() . 'static/demo/js/vendor-all.min.js';?>"></script>
        <script src="<?php echo site_url() . 'static/demo/js/plugins/bootstrap/bootstrap.min.js';?>"></script>
        <script src="<?php echo site_url() . 'static/demo/js/pcoded.min.js';?>"></script>
    </body>
</html>
