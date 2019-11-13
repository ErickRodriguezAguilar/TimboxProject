/** Note LAs validaciones de la forma en register.php se realizaran aqui. 
 *  El cambio de color de los inputs
 *  Los mensajes
 *  La logica de RFC
 * 
 */

$("#form").on('submit', function(e){
    //name validatio
    e.preventDefault();
    var validForm=true;

  

    var name=$("#name");
    var nameError = $("#nameError");
    var email = $("#email");
    var emailError = $("#emailError");
    var rfc =$("#rfc");
    var rfcError=$("#rfcError");
    var password =$("#password");
    var passwordError = $("passwordError");
    var confirmedPassword = $("#confirmedPassword");
    var confirmedPasswordError= $("#confirmedPasswordError");
   
    if(!name.val()){
        name.addClass("error-input");
        nameError.text("* Please Enter a Name.");
        nameError.addClass("error-text");
        validForm=false;
    }



    if(!email.val()){
        email.addClass("error-input");      
        emailError.text("* Ingrese un correo electronico");  
        emailError.addClass("error-text"); 
        validForm=false;
    }

    if(!rfc.val()){
        rfc.addClass("error-input");
        rfcError.text("* Ingrese su RFC.");
        rfcError.addClass("error-text");
        validForm=false;
    }

    if(!password.val()){
        password.addClass("error-input");
        passwordError.text("* Ingrese su RFC.");
        passwordError.addClass("error-text");
    }

    if(!confirmedPassword.val()){
        confirmedPassword.addClass("error-input");
        confirmedPasswordError.text("* Ingrese su RFC.");
        confirmedPasswordError.addClass("error-text");
    }

    if(! (confirmedPassword === password)){
        confirmedPasswordError.text("* La contraseñas denben coincidir.");
        confirmedPasswordError.addClass("error-text");
    }

    if(validForm==true){
        this.submit();
    }
});

function isValidEmail(email){
    //Expresion regular para validad si es un correo electronico. 
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function isValidRfc(){
    return true;
}

