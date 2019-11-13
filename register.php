<?php 
    $name=null;
    $email=null;
    $rfc=null;
    $password=null;
    $passwordConfirm=null;

    $nameError=null;
    $emailError=null;
    $rfcError=null;
    $passwordError=null;
?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container">
            <div>
                <h1 style="text-align: center">Registrar Usuario</h1>
            </div>

              <!--Form Section.-->
            <form class="form-group col-10" action="register.php">
            
                <!--Name field.-->
                <div class="form-group format-form-item">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="Name" placeholder="Ingresa nombre">   
                </div>

                  <!--E-mail field.-->
                <div class="form-group format-form-item">
                    <label for="">E-mail</label>
                    <input class="form-control" type="text" name="email" placeholder="Ingresar Correo Electronico">   
                </div>

                  <!--RFC field.-->
                <div class="form-group format-form-item">
                    <label for="">RFC</label>
                    <input class="form-control" type="text" name="RFC" placeholder="Ingresar RFC">   
                </div>

                  <!--Password field.-->
                <div class="form-group format-form-item">
                    <label for="">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Ingresar password">   
                </div>

                <!--Confimar password field.-->
                <div class="form-group format-form-item">
                    <label for="">Confirmar Password</label>
                    <input class="form-control" type="password" name="passwordConfirm" placeholder="Confirmar password">   
                </div>

                <!--Submit Form-->
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Registrar Usuario</button>
                    <a class="btn btn-info" href="index.php">Cancelar</a>
                </div>
            </form>
    </div>

<!-- Agrego el footer de la pagina.  -->
<?php include_once('partials/footer.php') ?>