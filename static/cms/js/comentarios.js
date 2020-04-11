function change_state(comment_id){
  bootbox.confirm({
    message: "Confirma que desea marcarlo como contestado?",
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
         $.ajax({
                   type: "post",
                   url: site+"dashboard/comentarios/cambiar_status",
                   dataType: "json",
                   data: {comment_id : comment_id},
                   success:function(data){ 
                       if(data.message == true){
                           Swal.fire({
                              position: 'top-end',
                              icon: 'success',
                              title: 'Realizado con éxito',
                              showConfirmButton: false,
                              timer: 1500
                            });
                            setTimeout(function(){
                               window.location.reload(1);
                            }, 1500);
                       }else{
                           Swal.fire({
                              position: 'top-end',
                              icon: 'error',
                              title: 'Sucedio un error!',
                              footer: 'Inténtalo nuevamente',
                              timer: 1500
                            });
                        }
                   }         
           });
    }
});
}
function change_state_no(comment_id){
    bootbox.confirm({
    message: "Confirma que desea marcarlo como no contestado?",
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
         $.ajax({
                   type: "post",
                   url: site+"dashboard/comentarios/cambiar_status_no",
                   dataType: "json",
                   data: {comment_id : comment_id},
                   success:function(data){   
                       if(data.message == true){
                           Swal.fire({
                              position: 'top-end',
                              icon: 'success',
                              title: 'Your work has been saved',
                              showConfirmButton: false,
                              timer: 1500
                            });
                            setTimeout(function(){
                               window.location.reload(1);
                            }, 1500);
                       }else{
                           Swal.fire({
                              position: 'top-end',
                              icon: 'error',
                              title: 'Sucedio un error!',
                              footer: 'Inténtalo nuevamente',
                              timer: 1500
                            });
                       }
                   }         
           });
    }
});
}
