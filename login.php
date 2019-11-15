<?php
    session_start();
    require 'models/database.php';
    $email=null;
    $password=null;
    $emailError=null;
    $passwordError=null;
    $databaseError=null;


    if(!empty($_POST)){
        $email=  $_POST['email'];
        $password = $_POST['password'];

        //Validaciones de inputs.
        $valid=true;
        if(empty($email)){
            $emailError= ' *Por favor, ingresa un correo electronico.';
            $valid=false;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $emailError = ' *Por favor, ingresa un correo electronico valido.';
            $valid=false;
        }

        if(empty($password)){
            $valid=false;
            $passwordError = ' *Por favor, ingresa su contraseña.';
        }

        //Logica para buscar usuario en Database. 
        if($valid){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="Select id,name from usuarios where email=? AND password=? ";
            $q= $pdo->prepare($sql);
            $q->execute(array($email,$password));
            $data= $q->fetch(PDO::FETCH_ASSOC);
            Database::disconnect();
            if($data){  
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                header("Location: site.php");
            }else{
                $databaseError= 'El correo electronico o la contraseña no son correctos. Por favor de verificarlo'; 
            }
        }
    }

?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container format-view">

            <div>
                <h1 style="text-align: center">Registrar Usuario</h1>
            </div>
            <div>
                <?php if(!empty($databaseError)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $databaseError; ?>
                    </div>
                <?php endif;?>
            </div>
            <form class="form-group col-10" action="login.php" method="post">
                <div class="form-group format-form-item">
                    <label for="">Correo Electronico</label>
                    <input id="inputEmail" class="form-control" type="text" name="email" placeholder="Ingresa Correo Electronico" value="<?php echo !empty($email)? $email:''; ?>">
                        <!--En caso de alguin error, se mostrara un mensaje. -->
                        <?php  if (!empty($emailError)) : ?>
                            <span class="help-inline error-text"> <?php echo $emailError ?> </span>
                            <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputEmail").addClass("error-input"); </script>;
                        <?php endif; ?>
                </div>
                <div class="form-group format-form-item">
                    <label for="">Password</label>
                    <input id="inputPassword" class="form-control" type="password" name="password" placeholder="password" >
                        <!--En caso de alguin error, se mostrara un mensaje. -->
                        <?php  if (!empty($passwordError)) : ?>
                            <span class="help-inline error-text"> <?php echo $passwordError ?> </span>
                            <!--Agrego clase con jQuery. Dicha clase le da el borde rojo al input con un error.-->
                            <script type="text/javascript">  $("#inputPassword").addClass("error-input"); </script>;
                        <?php endif; ?>    
                </div>
                <!--Submit Form-->
                <div class="form-actions" >
                    <button type="submit" class="btn btn-success">Iniciar sesion</button>
                    <a class="btn btn-info" href="index.php">Cancelar</a>
                </div>
            </form>
    </div>

<!-- Agrego el footer de la pagina.  -->
<?php include_once('partials/footer.php') ?>