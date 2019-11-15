<?php 
session_start();

include_once 'models/user.php';
include_once 'models/database.php';
$user = new User();
$rfcError= null;
$emailError=null;

    if(!empty($_POST)){
        $user->setName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->setRfc($_POST['rfc']);
        $user->setPassword($_POST['password']);
        $valid=true;

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="Select rfc,email from usuarios where rfc=? Or email=?";
        $q= $pdo->prepare($sql);
        $q->execute(array($user->getRfc(),$user->getEmail()));
        $rfcData= $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        if(!$rfcData){  
            $pdo= Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO usuarios (name,email,rfc,password) values(?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($user->getName(), $user->getEmail(),$user->getRfc(),$user->getPassword()));
            Database::disconnect();
            header("Location: index.php?userValid=1");
        }else{
            $databaseError= 'El RFC o el correon ya estan registrados. Por favor de proporcionar otra informacion. ';
        }
            

    
    }
  
?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container format-view">
            <div>
                <h1 style="text-align: center">Registrar Usuario</h1>
            </div>

            <?php if(!empty($databaseError)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $databaseError; ?>
                    </div>
                <?php endif;?>

              <!--Form Section.-->
            <form id="form" class="form-group col-10" action="register.php" method="post">
            
                <!--Name field.-->
                <div class="form-group format-form-item">
                    <label for="">Nombre</label>
                    <input id="name" class="form-control" type="text" name="name" placeholder="Ingresa nombre">
                    <span id="nameError" class="error-text"></span>   
                </div>

                  <!--E-mail field.-->
                <div class="form-group format-form-item">
                    <label for="">E-mail</label>
                    <input id="email" class="form-control" type="text" name="email" placeholder="Ingresar Correo Electronico">
                    <span id="emailError" class="error-text"></span>     
                </div>

                  <!--RFC field.-->
                <div class="form-group format-form-item">
                    <label for="">RFC</label>
                    <input id="rfc" class="form-control" type="text" name="rfc" placeholder="Ingresar RFC">
                    <span id="rfcError" class="error-text">  </span>     
                </div>

                  <!--Password field.-->
                <div class="form-group format-form-item">
                    <label for="">Password</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Ingresar password">
                    <span id="passwordError" class="error-text"></span>     
                </div>

                <!--Confimar password field.-->
                <div class="form-group format-form-item">
                    <label for="">Confirmar Password</label>
                    <input id="confirmedPassword" class="form-control" type="password" name="passwordConfirm" placeholder="Confirmar password">   
                    <span id="confirmedPasswordError" class="error-text"></span>  
                </div>

                <!--Submit Form-->
                <div class="form-actions">
                    <button id="submitButton" type="submit" class="btn btn-success">Registrar Usuario</button>
                    <a class="btn btn-info" href="index.php">Cancelar</a>
                    <span></span>  
                </div>
            </form>
    </div>

    <script src="src/js/register.js"></script>

<!-- Agrego el footer de la pagina.  -->
<?php include_once('partials/footer.php') ?>