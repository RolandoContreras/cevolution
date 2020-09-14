function new_portafolio(){    
     var url = 'dashboard/portafolio/load';
     location.href = site+url;   
}
function edit_portafolio(portafolio_id){    
     var url = 'dashboard/portafolio/load/'+portafolio_id;
     location.href = site+url;   
}
function cancel_portafolio(){
	var url= 'dashboard/portafolio';
	location.href = site+url;
}
function delete_portafolio(portafolio_id){
    bootbox.confirm({
    message: "¿Confirma que desea eliminar el portafolio?",
    buttons: {
        confirm: {
            label: 'Confirmar',
            className: 'btn-success'
        },
        cancel: {
            label: 'Cerrar',
            className: 'btn-danger'
        }
    },
    callback: function () {
         if (e == true) {
                $.ajax({
                    type: "post",
                    url: site + "dashboard/portafolio/delete",
                    dataType: "json",
                    data: {portafolio_id: portafolio_id},
                    success: function (data) {
                        if (data.status == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Eliminado',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            window.setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Verifique error',
                            });
                        }
                    }
                });

            }
    }
    });
}
function upload_img() {
    var input = document.getElementById('image_file').value;
    if (input != null) {
        $("#respose_img").html();
        var texto = "";
        texto = texto + 'Seleccionado: ';
        texto = texto + input;
        $("#respose_img").html(texto);
        $("#label_img").removeClass("invalid").addClass("valid");
    } else {
        $("#label_img").removeClass("valid").addClass("invalid");
    }
}
function upload_img2() {
    var input = document.getElementById('image_file2').value;
    if (input != null) {
        $("#respose_img2").html();
        var texto = "";
        texto = texto + 'Seleccionado: ';
        texto = texto + input;
        $("#respose_img2").html(texto);
        $("#label_img2").removeClass("invalid").addClass("valid");
    } else {
        $("#label_img2").removeClass("valid").addClass("invalid");
    }
}
function upload_img3() {
    var input = document.getElementById('image_file3').value;
    if (input != null) {
        $("#respose_img").html();
        var texto = "";
        texto = texto + 'Seleccionado: ';
        texto = texto + input;
        $("#respose_img3").html(texto);
        $("#label_img3").removeClass("invalid").addClass("valid");
    } else {
        $("#label_img3").removeClass("valid").addClass("invalid");
    }
}
function upload_img4() {
    var input = document.getElementById('image_file4').value;
    if (input != null) {
        $("#respose_img").html();
        var texto = "";
        texto = texto + 'Seleccionado: ';
        texto = texto + input;
        $("#respose_img4").html(texto);
        $("#label_img4").removeClass("invalid").addClass("valid");
    } else {
        $("#label_img4").removeClass("valid").addClass("invalid");
    }
}
function upload_img5() {
    var input = document.getElementById('image_file5').value;
    if (input != null) {
        $("#respose_img").html();
        var texto = "";
        texto = texto + 'Seleccionado: ';
        texto = texto + input;
        $("#respose_img5").html(texto);
        $("#label_img5").removeClass("invalid").addClass("valid");
    } else {
        $("#label_img5").removeClass("valid").addClass("invalid");
    }
}
function upload_img6() {
    var input = document.getElementById('image_file6').value;
    if (input != null) {
        $("#respose_img").html();
        var texto = "";
        texto = texto + 'Seleccionado: ';
        texto = texto + input;
        $("#respose_img6").html(texto);
        $("#label_img6").removeClass("invalid").addClass("valid");
    } else {
        $("#label_img6").removeClass("valid").addClass("invalid");
    }
}
