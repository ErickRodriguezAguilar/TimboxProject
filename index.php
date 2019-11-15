<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>
    
    <div class="container">
        <div class="jumbotron">
            <div class="center">
                <img src="src/images/timbox.png" alt="" srcset="">
            </div>
            <h1 class="display-4">Bienvenido a la App de Timbox</h1>
            <hr class="my-4">
            <h2>Que desea Realizar?<h2>
                
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