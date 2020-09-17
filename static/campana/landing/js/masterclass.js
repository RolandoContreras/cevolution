function masterclass() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    $.ajax({
        type: "post",
        url: site + "transformacion/masterclass",
        dataType: "json",
        data: {name: name,
            email: email},
        success: function (data) {
            var name = document.getElementById("reservar_boton").innerHTML = "Procesando...";
            if (data.status == true) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Bienvenido',
                    showConfirmButton: false,
                    timer: 1500
                });
                window.setTimeout(function () {
                    window.location = site + data.url;
                }, 1500);
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Sucedio un error',
                    footer: 'Comunique a soporte'
                });
            }

        }
    });
}
function adquirir_programa() {
    $.ajax({
        type: "post",
        url: site + "transformacion/programa_add_cart1",
        dataType: "json",
        data: {},
        success: function (data) {
            document.getElementById("boton_programa").innerHTML = "Procesando...";
            if (data.status == true) {
                window.location = site + "transformacion/pagar";
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Sucedio un error',
                    footer: 'Comunique a soporte'
                });
                document.getElementById("boton_programa").innerHTML = "¡ADQUIRIR EL PROGRAMA AHORA!";
            }

        }
    });
}
