
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilo-inicio.css" rel="stylesheet" type="text/css"/>
        <title>Iniciar Sesión</title>
    </head>
    <body>
        <form action="" id="formIni" >
            <div class="form" >
                <h1 id="titulo-registro">Inicio de Sesión</h1>
                <div class="grupo">
                    <input type="text" name="nombreInicio" pattern="[A-Za-z0-9_-]{1,15}" required id="nameI"><span class="barra"></span>
                    <label for="nameI">Nombre de usuario</label>
                </div>
                <div class="grupo">
                    <input type="password" name="contraInicio"  pattern="[A-Za-z0-9_-]{1,15}" required id="passwordI"><span class="barra"></span>
                    <label for="passwordI">Password</label>
                </div>

                <button type="submit">Ingresar</button>
                <p class="warnings" id="warnings"></p>
                <a href="Registrarse.php" id="inicioEnlace">Eres nuevo, Registrate</a>
                <br>
              
            </div>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/ValidarInput.js" type="text/javascript"></script>
        <script>
    $(document).on('submit','#formIni',function(event){
            event.preventDefault();
            $.ajax({
                url:'inicioSesionBD.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                 
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error){
                    location='InicioGeneral.php';
                   
                }else {
                  alert("El usuario o la contraseña son incorrectos");
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("asda");
            });
      });


        </script>
    </body>
</html>
