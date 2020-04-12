function send_message(){
    var name = document.getElementById("contact-name").value;
    var subject = document.getElementById("contact-subject").value;
    var email = document.getElementById("contact-email").value;
    var message = document.getElementById("contact-message").value;
    //GET DATA RECAPTCHA
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        $("#respose").html();
        var texto = "";
        texto = texto+'<div class="alert alert-danger alert-dismissible fade show" role="alert">';
        texto = texto+'<p style="text-align: center;">Captcha no verificado</p>';
        texto = texto+'</div>';                 
        $("#respose").html(texto);
    }
    else{
        if(name == ""){
            $("#respose").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            texto = texto+'<p style="text-align: center;">Ingrese nombre</p>';
            texto = texto+'</div>';                 
            $("#respose").html(texto);
            $("#contact-name").focus();
        }else if(subject == ""){
            $("#respose").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            texto = texto+'<p style="text-align: center;">Ingrese Asunto</p>';
            texto = texto+'</div>';                 
            $("#respose").html(texto);
            $("#contact-subject").focus();
        }else if(email == ""){
            $("#respose").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            texto = texto+'<p style="text-align: center;">Ingrese E-mail</p>';
            texto = texto+'</div>';                 
            $("#respose").html(texto);
            $("#contact-email").focus();
        }else if(message == ""){
            $("#respose").html();
            var texto = "";
            texto = texto+'<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            texto = texto+'<p style="text-align: center;">Ingrese Mensaje</p>';
            texto = texto+'</div>';                 
            $("#respose").html(texto);
            $("#contact-message").focus();
        }else{
            var email_2 = validar_email(email);
            if(email_2 == true){
                   $.ajax({
                   type: "post",
                   url: site+"contacto/enviar_mensage",
                   dataType: "json",
                   data: {name : name,
                          email : email,
                          subject : subject,
                          message : message
                          },
                   success:function(data){
                       if(data.message == true){
                           Swal.fire({
                              position: 'top-end',
                              icon: 'success',
                              title: 'Tu mensaje fue enviado, en breve nos podremos en contacto.',
                              showConfirmButton: false,
                              timer: 1500
                            })
                       }else{
                           Swal.fire({
                              icon: 'error',
                              title: 'Ups...',
                              text: 'Sucedió un error',
                              footer: '<a href>Vuelve a intentarlo!</a>'
                            })
                       }
                   }         
                 });
            }else{
                $("#respose").html();
                var texto = "";
                texto = texto+'<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                texto = texto+'<p style="text-align: center;">E-mail no valido</p>';
                texto = texto+'</div>';                 
                $("#respose").html(texto);
                $("#contact-email").focus();
            }
        }
    }
    
    
}
function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}