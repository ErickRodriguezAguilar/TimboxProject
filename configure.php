<?php 
    include_once 'models/user.php';
    $user = new User();

    if(!empty($_POST)){
        $user->setName($_POST['name']);
        $user->setRfc($_POST['rfc']);
        $user->setDireccion($_POST['direccion']);
        $user->setTelefono($_POST['telefono']);
        $user->setWebsite($_POST['website']);
        $user->setPassword($_POST['password']);

        if($user->isValid()){
            //database logic.
        }
    }
?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container format-view">
            <div>
                <h1 style="text-align: center">Configuracion de usuario</h1>
            </div>

              <!--Form Section.-->
            <form class="form-group col-10" action="configure.php" method="post">
            
                <!--Name field.-->
                <div class="form-group format-form-item">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="name" placeholder="Ingresa nombre" value="<?php echo !empty($user->getName())? $user->getName(): ''; ?>">
                    <?php if(!empty($user->getNameError())): ?> 
                        <span class="help-inline error-text"> <?php echo $user->getNameError(); ?> </span>
                        <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputPassword").addClass("error-input"); </script>;
                    <?php endif; ?>  
                </div>

                  <!--Rfc field.-->
                <div class="form-group format-form-item">
                    <label for="">RFC</label>
                    <input class="form-control" type="text" name="rfc" placeholder="Ingresar RFC. Ex: ROAE951012HBC" value="<?php echo !empty($user->getRfc())? $user->getRfc(): ''; ?>">
                    <?php if(!empty($user->getRfcError())): ?> 
                        <span class="help-inline error-text"> <?php echo $user->getRfcError(); ?> </span>
                        <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputPassword").addClass("error-input"); </script>;
                    <?php endif; ?>    
                </div>

                  <!--Direccion field.-->
                <div class="form-group format-form-item">
                    <label for="">Direccion</label>
                    <input class="form-control" type="text" name="direccion" placeholder="Ingresar direccion" value="<?php echo !empty($user->getDireccion())? $user->getDireccion(): ''; ?>">
                    <?php if(!empty($user->getDireccionError())): ?> 
                        <span class="help-inline error-text"> <?php echo $user->getDireccionError(); ?> </span>
                        <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputPassword").addClass("error-input"); </script>;
                    <?php endif; ?>    
                </div>

                  <!--Telefono field.-->
                <div class="form-group format-form-item">
                    <label for="">Telefono</label>
                    <input class="form-control" type="text" name="telefono" placeholder="Ingresar telefono 10 digitos. Ex. 6862378901" value="<?php echo !empty($user->getTelefono())? $user->getTelefono(): ''; ?>">
                    <?php if(!empty($user->getTelefonoError())): ?> 
                        <span class="help-inline error-text"> <?php echo $user->getTelefonoError(); ?> </span>
                        <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputPassword").addClass("error-input"); </script>;
                    <?php endif; ?>     
                </div>

                <!--Website field.-->
                <div class="form-group format-form-item">
                    <label for="">Website</label>
                    <input class="form-control" type="text" name="website" placeholder="Ingresar Website" value="<?php echo !empty($user->getWebsite())? $user->getWebsite(): ''; ?>">
                    <?php if(!empty($user->getWebsiteError())): ?> 
                        <span class="help-inline error-text"> <?php echo $user->getwebsiteError(); ?> </span>
                        <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputPassword").addClass("error-input"); </script>;
                    <?php endif; ?>     
                </div>

                <!--Password field.-->
                <div class="form-group format-form-item">
                    <label for="">Cambiar contraseña</label>
                    <input class="form-control" type="password" name="password" placeholder="Ingresa contraseña" value="<?php echo !empty($user->getPassword())? $user->getPassword(): ''; ?>">
                    <?php if(!empty($user->getPasswordError())): ?> 
                        <span class="help-inline error-text"> <?php echo $user->getPasswordError(); ?> </span>
                        <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputPassword").addClass("error-input"); </script>;
                    <?php endif; ?>     
                </div>
                
                <!--Submit Form-->
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    <a class="btn btn-info" href="index.php">Regresar a inicio</a>
                </div>
            </form>
    </div>

<!-- Agrego el footer de la pagina.  -->
<?php include_once('partials/footer.php') ?>