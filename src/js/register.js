/** Note LAs validaciones de la forma en register.php se realizaran aqui. 
 *  El cambio de color de los inputs
 *  Los mensajes
 *  La logica de RFC
 * 
 */

$("#form").on('submit', function(e){
    //name validatio
    e.preventDefault();
    var validForm=false;

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

	name.change(function () {
        if(name.val()){
            name.removeClass("error-input");
            nameError.text("");
            nameError.removeClass("error-text");
            validForm=true;
        }else{
            name.addClass("error-input");
            nameError.text("* Please Enter a Name.");
            nameError.addClass("error-text");
            validForm=false;
        }
      })

      email.change(function(){
        if(!email.val()){
            email.addClass("error-input");      
            emailError.text("* Ingrese un correo electronico");  
            emailError.addClass("error-text"); 
            validForm=false;
        }else{
            email.removeClass("error-input");
            emailError.text("");
            emailError.removeClass("error-text");
            validForm=true;
        }
      });

      rfc.change(function () {
        if(!rfc.val()){
            rfc.addClass("error-input");
            rfcError.text("* Ingrese su RFC.");
            rfcError.addClass("error-text");
            validForm=false;
        }else{
            rfc.removeClass("error-input");
            rfcError.text("");
            rfcError.removeClass("error-text");
            validForm=true;
        }
    });

    password.change(function () {
        if(!password.val()){
            password.addClass("error-input");
            passwordError.text("* Ingrese su contraseña.");
            passwordError.addClass("error-text");
            validForm=false;
        }else{
            if(confirmedPassword.val() === password.val() ){
                confirmedPassword.removeClass("error-input");
                confirmedPasswordError.text("");
                confirmedPasswordError.removeClass("error-text"); 
            }else{
                password.removeClass("error-input");
                passwordError.text("");
                passwordError.removeClass("error-text");
                validForm=true;
            }
        }
    })

    confirmedPassword.change(function () {
        if(!confirmedPassword.val()){
            confirmedPassword.addClass("error-input");
            confirmedPasswordError.text("* Confirme su contraseña.");
            confirmedPasswordError.addClass("error-text");
            validForm=false;
        }else{
            if(confirmedPassword.val() === password.val() ){
                confirmedPassword.removeClass("error-input");
                confirmedPasswordError.text("");
                confirmedPasswordError.removeClass("error-text");
                validForm=true; 
            }else{
                confirmedPassword.addClass("error-input");
                confirmedPasswordError.text("* La contraseñas denben coincidir.");
                confirmedPasswordError.addClass("error-text");
                validForm=false;

            }
        }
    });

    if(validForm===true){
        
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

