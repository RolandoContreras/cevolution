function send_message() {
    document.getElementById("contac_boton").innerHTML = "Procesando...";
    var form = $('#contactForm');
    $.ajax(
            {
                type: "POST",
                url: site + "contacto/enviar_mensage",
                data: form.serialize(),
                success: function (data)
                {
                    var data = JSON.parse(data);
                    if (data.status == true) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Mensaje Enviado',
                            text: 'Nos comunicaremos a la brevedad con usted',
                            showConfirmButton: false,
                            timer: 2000
                        });
                       document.getElementById("contac_boton").innerHTML = "ENVIAR MENSAJE";
                    } else if (data.status == "false2") {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'info',
                            title: 'Capcha no verificado',
                            showConfirmButton: false,
                            timer: 1000
                        });
                        window.setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    } else {
                        Swal.fire({
                            icon: 'info',
                            title: 'Usuario no registrado',
                            text: 'Verifique los datos'
                        });
                        document.getElementById("contac_boton").innerHTML = "ENVIAR MENSAJE";
                    }
                }
            });

}