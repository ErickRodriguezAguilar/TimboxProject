<?php 

    $name= "Erick";
?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>
    
    <div class="container">
        <div class="jumbotron format-view">
                <div>
                    <div>
                        <img src="src/images/chico.png"  style="width: 20%; height:40%;"alt="">
                        <h1  style="display:inline-block"  class="display-2">Bienvenido,  <?php echo $name ?> </h1>
                    </div>
                    
                </div>
            
            <hr class="my-4">
            <h2>Que desea Realizar?<h2>
                
            <div class="row">
                <div class="col-6">
                    <a class="btn btn-info btn-block " href="configure.php">Configuracion de Usuario</a>
                </div>

                <div class="col-6">
                    <a class="btn btn-info btn-block" href="algorithm.php">Validacion de palindromos</a>
                </div>
            </div>
        </div>
    </div>


</body>
</html>