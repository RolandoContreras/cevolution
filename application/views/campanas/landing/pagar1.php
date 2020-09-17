<!doctype html>
<html lang="es-PE">
    <head>
        <title>Cultura Imparable | Compras por referencia </title>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="Index, Follow">
        <!--//STAR FAVICON-->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url() . 'assets/page_front/images/logo/favico/apple-touch-icon.png'; ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url() . 'assets/page_front/images/logo/favico/favicon-32x32.png'; ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url() . 'assets/page_front/images/logo/favico/favicon-16x16.png'; ?>">
        <!-- Google Fonts ====================================================== -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic|Fira+Sans:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- Kajabi CSS ======================================================== -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Customer CSS ====================================================== -->
        <link rel="stylesheet" media="screen" href="<?php echo site_url() . "assets/campana1/css/pagar.css"; ?>"/>
        <link rel="stylesheet" media="screen" href="http://localhost/shesy/static/page_front/css/styles.css?15964308185009978"/>
        <!-- Boostrap ====================================================== -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
        <script type="text/javascript">
            var site = '<?php echo site_url(); ?>';
        </script>
    </head>    <body>
        <div id="section-header" data-section-id="header">
            <header class="header header--static ">
                <div class="header__wrap">
                    <div class="header__content header__content--desktop background-dark">
                        <div class="container header__container media">
                            <div id="block-1555988494486" class="header__block header__block--logo header__block--show">
                                <img class="" src="<?php echo site_url() . "assets/campana1/img/logo/logo_camapana.png" ?>" alt="Logo" width="100"/>
                            </div>
                        </div>
                    </div>
                    <div class="header__content header__content--mobile background-light"></div>
                </div>
            </header>
        </div>
        <div class="background-image background-image--1590554804411">
            <div class="section section--opt_in section--middle section--xs-small section--dark section--1590554804411">
                <div class="container">
                    <div class="row text-xs-center">
                        <div class="col-md-6" id="show-first">
                            <div class="section--middle optin__panel optin__panel--boxed">
                                <div class="row optin optin--stacked">
                                    <div class="col-md-12">
                                        <div class="checkout-content">
                                            <img class="img-responsive checkout-content-img" src="<?php echo site_url() . "assets/campana1/img/transformacion-sobrenatural.jpg" ?>" alt="Transformación Sobrenatural">
                                            <div class="checkout-content-body">
                                                <div class="space-20"></div>
                                                <h3>
                                                    <?php foreach ($this->cart->contents() as $items): ?>
                                                        <span style="color: #000000;">
                                                            <i class="fa fa-check"></i>&nbsp;&nbsp;Transformación Sobrenatural<br><br>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </h3>

                                            </div>
                                            <div class="checkout-content-body" kjb-settings-id="checkout-copy-section">
                                                <h2 style="text-align: center;"><span style="color: #57de1d;"><strong>Estas apunto de dar el siguiente paso hacía el futuro.<br>&nbsp;</strong></span></h2>
                                                <h4><span style="color: #000000;"><span style="font-weight: 400;">&nbsp;⭐&nbsp;</span><strong>30 días de retos de aprendizaje para tu “Transformación Sobrenatural”.<br><br></strong></span></h4>
                                                <h4><span style="color: #000000;"><strong>⭐&nbsp;Acceso a un extra de “Jaquemente” <br><br></strong></span></h4>
                                                <h4><span style="color: #000000;"><strong>⭐Acceso a nuestra “”Comunidad Consciente<br><br></strong></span></h4>
                                                <h4><span style="color: #000000;"><strong>⭐&nbsp;Certificado de culminación del programa.<br><br></strong></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1" id="show-second">
                            <form action="javascript:void(0);" method="post">
                                <div class="section--middle optin__panel optin__panel--boxed">
                                    <div class="row optin optin--stacked">
                                        <div class="col-md-12">
                                            <h4 class="checkout-panel-title js-checkout-panel-price-discountable" style="color: #000000;">
                                                Pago con Tarjeta
                                            </h4>
                                        </div>
                                        <div class="col-md-12">
                                            <h2 class="checkout-panel-title js-checkout-panel-price-discountable" style="color: #000000;">
                                                &dollar;<?php echo $this->cart->format_number($this->cart->total()); ?>
                                            </h2>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-12" style="text-align: left">
                                            <div class="space-20"></div>
                                            <div class="text-field form-group">
                                                <p class="optin__subheading">Nombre</p>
                                                <input type="text" name="name" id="name" required="required" class="form-control" placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="text-align: left">
                                            <div class="text-field form-group">
                                                <p class="optin__subheading">Email</p>
                                                <input type="email" name="email" id="email" required="required" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div id="error-message"></div>
                                        <div class="col-md-12" id="tarjeta">
                                            <button id="checkout-button-price_1HR0RyAzkAx4xKltIORnr0tA" role="link" type="submit" class="buyButton btn btn--sections_1590554804411_settings_btn_text btn--block btn--solid btn-form form-control"><i class="fa fa-credit-card"></i> Pagar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="http://localhost/shesy/static/page_front/js/script/home.js"></script>
        <!-- Load Stripe.js on your website. -->
        <script src="https://js.stripe.com/v3"></script>
        <script>
            (function () {
                var stripe = Stripe('pk_live_51H7MV4AzkAx4xKlt2pjPfI5pcQPMWhd23ARLAsI3jNYsi3NsAEATEuvsdToRzB2xlc1MUORXnsMrkkcsQb7hG0B3000MDXXKLd');

                var checkoutButton = document.getElementById('checkout-button-price_1HR0RyAzkAx4xKltIORnr0tA');
                checkoutButton.addEventListener('click', function () {
                    // When the customer clicks on the button, redirect
                    // them to Checkout.
                    var name = document.getElementById("name").value;
                    var email = document.getElementById("email").value;
                    //validate
                    if (name != "" && email != "") {
                        document.getElementById("checkout-button-price_1HR0RyAzkAx4xKltIORnr0tA").innerHTML = "Procesando...";
                        //create customer and session
                        $.ajax({
                            type: "post",
                            url: site + "transformacion/new_customer",
                            dataType: "json",
                            data: {name: name,
                                email: email},
                            success: function (data) {
                                    stripe.redirectToCheckout({
                                        lineItems: [{price: 'price_1HR0RyAzkAx4xKltIORnr0tA', quantity: 1}],
                                        mode: 'payment',
                                        // Do not rely on the redirect to the successUrl for fulfilling
                                        // purchases, customers may not always reach the success_url after
                                        // a successful payment.
                                        // Instead use one of the strategies described in
                                        // https://stripe.com/docs/payments/checkout/fulfillment
                                        successUrl: window.location.protocol + '//expansion-consciente.com/transformacion/success',
                                        cancelUrl: window.location.protocol + '//expansion-consciente.com/transformacion/canceled'
                                    }).then(function (result) {
                                        if (result.error) {
                                            // If `redirectToCheckout` fails due to a browser or network
                                            // error, display the localized error message to your customer.
                                            var displayError = document.getElementById('error-message');
                                            displayError.textContent = result.error.message;
                                        }
                                    });
                            }
                        });


                    }


                });
            })();
        </script>
