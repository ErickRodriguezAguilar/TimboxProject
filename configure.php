<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container">
            <div>
                <h1 style="text-align: center">Configuracion de usuario</h1>
            </div>

              <!--Form Section.-->
            <form class="form-group col-10" >
            
                <!--Name field.-->
                <div class="form-group format-form-item">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="name" placeholder="Ingresa nombre">   
                </div>

                  <!--E-mail field.-->
                <div class="form-group format-form-item">
                    <label for="">RFC</label>
                    <input class="form-control" type="text" name="rfc" placeholder="Ingresar RFC">   
                </div>

                  <!--RFC field.-->
                <div class="form-group format-form-item">
                    <label for="">Direccion</label>
                    <input class="form-control" type="text" name="direccion" placeholder="Ingresar direccion">   
                </div>

                  <!--Password field.-->
                <div class="form-group format-form-item">
                    <label for="">Telefono</label>
                    <input class="form-control" type="text" name="telefono" placeholder="Ingresar telefono">   
                </div>

                <!--Confimar password field.-->
                <div class="form-group format-form-item">
                    <label for="">Website</label>
                    <input class="form-control" type="text" name="website" placeholder="Ingresar Website">   
                </div>

                <!--Confimar password field.-->
                <div class="form-group format-form-item">
                    <label for="">Cambiar contraseña</label>
                    <input class="form-control" type="password" name="password" placeholder="Ingresa contraseña">   
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