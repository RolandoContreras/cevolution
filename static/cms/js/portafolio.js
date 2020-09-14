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
