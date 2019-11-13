<?php 
    if(!empty($_POST)){
        $name= $_POST['name'];
        $email=$_POST['email'];
        $rfc=$_POST['rfc'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['passwordConfirm'];

        if (!empty ($name) && !empty($email) && !empty($rfc) && !empty($password) && !empty ($confirmPassword)){

        }
    }
  
?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container">
            <div>
                <h1 style="text-align: center">Registrar Usuario</h1>
            </div>

              <!--Form Section.-->
            <form id="form" class="form-group col-10" action="register.php" method="post">
            
                <!--Name field.-->
                <div class="form-group format-form-item">
                    <label for="">Nombre</label>
                    <input id="name" class="form-control" type="text" name="name" placeholder="Ingresa nombre">
                    <span id="nameError"></span>   
                </div>

                  <!--E-mail field.-->
                <div class="form-group format-form-item">
                    <label for="">E-mail</label>
                    <input id="email" class="form-control" type="text" name="email" placeholder="Ingresar Correo Electronico">
                    <span id="emailError"></span>     
                </div>

                  <!--RFC field.-->
                <div class="form-group format-form-item">
                    <label for="">RFC</label>
                    <input id="rfc" class="form-control" type="text" name="rfc" placeholder="Ingresar RFC">
                    <span id="rfcError"> </span>     
                </div>

                  <!--Password field.-->
                <div class="form-group format-form-item">
                    <label for="">Password</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Ingresar password">
                    <span id="passwordError"></span>     
                </div>

                <!--Confimar password field.-->
                <div class="form-group format-form-item">
                    <label for="">Confirmar Password</label>
                    <input id="confirmedPassword" class="form-control" type="password" name="passwordConfirm" placeholder="Confirmar password">   
                    <span id="confirmedPasswordError"></span>  
                </div>

                <!--Submit Form-->
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Registrar Usuario</button>
                    <a class="btn btn-info" href="index.php">Cancelar</a>
                    <span></span>  
                </div>
            </form>
    </div>

    <script src="src/js/register.js"></script>

<!-- Agrego el footer de la pagina.  -->
<?php include_once('partials/footer.php') ?>