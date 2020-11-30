$(document).ready(function (){
   
    //Permitir solo letras y numeros en input nombre de usuario
    
    $("#name").keypress(function (key){
       window.console.log(key.charCode);
       if ((key.charCode <48 || key.charCode > 57)//numeros
               && (key.charCode < 97 || key.charCode > 122)//letras minusculas
                && (key.charCode < 65 || key.charCode > 90) //mayusculas mayusculas
        
        )
        return false;
    });
    //Permitir solo letras y numeros en input contraseña
    $("#password").keypress(function (key){
       window.console.log(key.charCode);
        if ((key.charCode <48 || key.charCode > 57)//numeros
               && (key.charCode < 97 || key.charCode > 122)//letras minusculas
                && (key.charCode < 65 || key.charCode > 90) //mayusculas mayusculas
        )
           return false;
    });
    $("#email").keypress(function (regexEmail) {
        regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-] + @ [a-zA-Z0-9 -] + (?: \. [ a-zA-Z0-9 -] +) * $ /;
        if (!regexEmail.test(regexEmail.value)) {
            $("#msgerror").html("El Correo no es válido.");
        }
    
    });
    
   //Permitir solo letras y numeros en input nombre de usuario en inicio de sesion
    
    $("#nameI").keypress(function (key){
       window.console.log(key.charCode);
       if ((key.charCode <48 || key.charCode > 57)//numeros
               && (key.charCode < 97 || key.charCode > 122)//letras minusculas
                && (key.charCode < 65 || key.charCode > 90) //mayusculas mayusculas
        
        )
        return false;
    });
    //Permitir solo letras y numeros en input contraseña en inicio de sesion
    $("#passwordI").keypress(function (key){
       window.console.log(key.charCode);
        if ((key.charCode <48 || key.charCode > 57)//numeros
               && (key.charCode < 97 || key.charCode > 122)//letras minusculas
                && (key.charCode < 65 || key.charCode > 90) //mayusculas mayusculas
        )
           return false;
    });
    
  
   

});


