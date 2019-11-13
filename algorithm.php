<?php 
    require_once 'models/palabra.php';
    $palabra = null;
    $palabra2 = null;
    $palabra3 = null;
    $palabra4 = null;
    if(!empty($_POST)){
        $palabra = new Palabra($_POST['palabra']);
        $palabra2 = new Palabra($_POST['palabra2']);
        $palabra3 = new Palabra($_POST['palabra3']);
        $palabra4 = new Palabra($_POST['palabra4']);
    }


?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container">
            <div>
                <h1 style="text-align: center">Configuracion de usuario</h1>
            </div>

              <!--Form Section.-->
            <form class="form-group col-10" action="algorithm.php" method="post">
            
                <!--Palabra field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra" placeholder="Ingresa palabra">
                    <!--En caso de alguin error, se mostrara un mensaje. -->
                        <?php  if(!empty($palabra)){ ?>
                            <?php if(!$palabra->isValid()) : ?>
                                <span class="help-inline"> <?php echo 'Hi' . $palabra->getPalabraError() ?> </span>
                            <?php endif; ?>
                        <?php  }?>   
                </div>

                  <!--Palabra field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra2" placeholder="Ingresar palabra">
                     <!--En caso de alguin error, se mostrara un mensaje. -->
                     <?php  if(!empty($palabra2)){ ?>
                            <?php if(!$palabra2->isValid()) : ?>
                                <span class="help-inline"> <?php echo 'Hi' . $palabra2->getPalabraError() ?> </span>
                            <?php endif; ?>
                        <?php  }?>      
                </div>

                  <!--Palabra field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra3" placeholder="Ingresar palabra" required> 
                     <!--En caso de alguin error, se mostrara un mensaje. -->
                     <?php  if(!empty($palabra3)){ ?>
                            <?php if(!$palabra3->isValid()) : ?>
                                <span class="help-inline"> <?php echo 'Hi' . $palabra3->getPalabraError() ?> </span>
                            <?php endif; ?>
                        <?php  }?>     
                </div>

                  <!--Palabra field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra4" placeholder="Ingresar palabra">  
                     <!--En caso de alguin error, se mostrara un mensaje. -->
                     <?php  if(!empty($palabra4)){ ?>
                            <?php if(!$palabra4->isValid()) : ?>
                                <span class="help-inline"> <?php echo 'Hi' . $palabra4->getPalabraError() ?> </span>
                            <?php endif; ?>
                        <?php  }?>    
                </div>

                <!--Submit Form-->
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Buscar palindromos</button>
                    <a class="btn btn-info" href="index.php">Regresar a inicio</a>
                </div>
            </form>
    </div>

<!-- Agrego el footer de la pagina.  -->
<?php include_once('partials/footer.php') ?>