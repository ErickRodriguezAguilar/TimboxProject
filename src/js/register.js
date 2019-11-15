/** Note LAs validaciones de la forma en register.php se realizaran aqui. 
 *  El cambio de color de los inputs
 *  Los mensajes
 *  La logica de RFC
 * 
 */

$("#form").submit(validate);


function validate(){

    var name = $("#name").val();
    var email = $("#email").val();
    var rfc = $("#rfc").val();
    var password = $("#password").val();
    var confirmedPassword = $("#confirmedPassword").val();

    var validForm=true;

    //validacion nombre.
   if(!name){
        $("#nameError").text("* Por favor ingresar su nombre");
        validForm=false;
   }else{
       $("#nameError").text("");
   } 

   //validacion email
   if(!email){
    $("#email").addClass("error-input");
       $("#name").toggleClass("error-input");
        $("#emailError").text("* Por favor ingresar su nombre");
        validForm=false;
    }else{
        
        if(!isEmailValid(email)){
            $("#email").addClass("error-input");
            $("#emailError").text("* El formato del correo no es invalido.");
            validForm=false;
        }else{
            $("#name").removeClass("error-input");
            $("#emailError").text("");
        }
    } 

    //validacion de rfc
    if(!rfc){
        $("#rfc").addClass("error-input");
        $("#rfcError").text("* Por favor ingresar su nombre");
        validForm=false;
    }else{
        if(!isRfcValid(rfc)){
            $("#rfc").addClass("error-input");
            $("#rfcError").text("* El formato del RFC es invalido.");
            validForm=false;
        }else{
            $("#rfc").removeClass("error-input");
            $("#rfcError").text("");
        }
        
    } 

    //Validaciones de los campos de contraseñas
    if(!password){
        $("#password").addClass("error-input");
        $("#passwordError").text("* Por favor ingresar su nombre");
        validForm=false;
    }else{
        $("#password").removeClass("error-input");
        $("#passwordError").text("");
    } 

    if(!confirmedPassword){
        $("#confirmedPassword").addClass("error-input");
        $("#confirmedPasswordError").text("* Por favor ingresar su nombre");
        validForm=false;
    }else{
        $("#confirmedPassword").removeClass("error-input");
        $("#confirmedPasswordError").text("");
    } 

    //comparacion de passwords.
    if(! (password == confirmedPassword)){
        validForm=false;
        $("#confirmedPassword").addClass("error-input");
        $("#password").addClass("error-input");
        $("#confirmedPasswordError").text("*  Verifique que las contraseñas coincidan");
    }


    return validForm;
}



function isRfcValid(rfc){
    //Expresion regular para validad si el RFC es valido. 
     var regex = "^(([A-ZÑ&]{4})([0-9]{2})([0][1-9]|[1][0-2])([0][1-9]|[1-2][0-9]|[3][0-1])([A-Z0-9]{3}))$";
    if(rfc.match(regex)){
        return true;
    }else{
        return false;
    }
}

function isEmailValid(email){
        //Expresion regular para validad si es un correo electronico. 
        var regex = "^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$";
        if(email.match(regex)){
            return true;
        }else{
            return false;
        }
}