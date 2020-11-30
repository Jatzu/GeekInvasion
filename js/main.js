$(document).ready(function () {

    function LimpiarDatos() {
        $('input[type="text"]').val('');
        $('input[type="email"]').val('');
        $('input[type="password"]').val('');
    }
        
//registro

    $('#formCrear').submit(function (event) {
        event.preventDefault();
        var error = '';
        var nombre_usuario = $('#name').val();
        var correo = $('#email').val();
        var password = $('#password').val();
        
        if (nombre_usuario === '') {
            error += '- Debe ingresar un nombre de usuario \n';
        }
        
        if (correo === '') {
            error += '- Debe ingresar un correo electronico \n';
        }
        
        if (password === '') {
            error += '- Debe ingresar una contraseña \n';
        }
        
        if (error === '') {
            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function (r)
                {
                    if (r === "0") {
                        alert("Usuario o correo en uso");
                        $('#nombre_usuario').focus();
                    } else {
                        alert("Registrado con exito");
                        location = 'index.php';
                    }
                }
            });
        } else {
            alert('Debe completar todos los campos solicitados: \n' + error);
        }
    });
    
      
      
    });
    




