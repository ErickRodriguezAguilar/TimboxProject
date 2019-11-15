<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php');
    session_start();
    $message=null;
    if(!empty($_GET)) {;
        $message="Se ha registrado con exito un usuario";
    }
?>


    <div class="container format-view">
        <div class="jumbotron">
            <div class="center" style="border: none;">
                <img src="src/images/timbox.png" alt="" srcset="">
            </div>
            <h1 class="display-4">Bienvenido a la App de Timbox</h1>
            <!--Este mensaje se mostrara cuando se regrese de la pagina registrar usuario.-->           
            <?php if(!empty($message)): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $message; ?>
                    </div>
            <?php endif;?>

            <hr class="my-4">

            <h2> ¿Qué desea Realizar?<h2>               
            <div class="row">
                <div class="col-6">
                    <a class="btn btn-info btn-block " href="login.php">Login</a>
                </div>

                <div class="col-6">
                    <a class="btn btn-info btn-block" href="register.php">Register</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>