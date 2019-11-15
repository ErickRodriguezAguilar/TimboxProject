<?php 
    require_once 'models/palabra.php';
    $palabra = new Palabra();
    $palabra2 = new Palabra();
    $palabra3 = new Palabra();
    $palabra4 = new Palabra();
    if(!empty($_POST)){
        $palabra->setPalabra($_POST['palabra']);
        $palabra2->setPalabra($_POST['palabra2']);
        $palabra3->setPalabra($_POST['palabra3']);
        $palabra4->setPalabra($_POST['palabra4']);
    }


?>

<!--Agrego el header.php. Que contiene el "<header></header>" y la declaracion de boostrap.  y el-->
<?php  include_once('partials/header.php') ?>

    <div class="container format-view">
            <div>
                <h1 style="text-align: center">Palindromos</h1>
            </div>

              <!--Form Section.-->
            <form class="form-group col-10" action="algorithm.php" method="post">
            
                <!--Palabra field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra" placeholder="Ingresa palabra" value="<?php echo !empty($palabra->getPalabra())? $palabra->getPalabra():''; ?>">
                    <!--En caso de alguin error, se mostrara un mensaje. -->
                        <?php  if(empty($palabra->getPalabra())){ ?>
                            <?php if(!$palabra->isValid()) : ?>
                                <span class="help-inline"> <?php echo  $palabra->getPalabraError() ?> </span>
                            <?php  endif ; ?>
                        <?php }else{  ?>
                            <!--Validacion de la palabra si es un palindromo. En caso de serlo o no, se mostrara un texto con una clase de css definida. -->
                            <?php if($palabra->isPalindromo()) { ?>
                                <span id="palabra" class="help-inline"> <?php echo  $palabra->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color verde.-->
                                <script type="text/javascript">  $("#palabra").addClass("success-text"); </script>;
                            <?php }else{ ?>
                                <span id="palabra" class="help-inline"> <?php echo  $palabra->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color rojo.-->
                                <script type="text/javascript">  $("#palabra").addClass("error-text"); </script>;
                            <?php } ?>  
                        <?php } ?>  
                </div>

                  <!--Palabra field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra2" placeholder="Ingresar palabra" value="<?php echo !empty($palabra2->getPalabra())? $palabra2->getPalabra():''; ?>">
                     <!--En caso de alguin error, se mostrara un mensaje. -->
                     <?php  if(empty($palabra2->getPalabra())){ ?>
                            <?php if(!$palabra2->isValid()) : ?>
                                <span class="help-inline"> <?php echo  $palabra2->getPalabraError() ?> </span>
                            <?php  endif ; ?>
                        <?php }else{  ?>
                            <!--Validacion de la palabra si es un palindromo. En caso de serlo o no, se mostrara un texto con una clase de css definida. -->
                            <?php if($palabra2->isPalindromo()) { ?>
                                <span id="palabra2" class="help-inline"> <?php echo  $palabra2->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color verde.-->
                                <script type="text/javascript">  $("#palabra2").addClass("success-text"); </script>;
                            <?php }else{ ?>
                                <span id="palabra2" class="help-inline"> <?php echo  $palabra->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color rojo.-->
                                <script type="text/javascript">  $("#palabra2").addClass("error-text"); </script>;
                            <?php } ?>  
                        <?php } ?>  
                </div>

                  <!--Palabra field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra3" placeholder="Ingresar palabra" value="<?php echo !empty($palabra3->getPalabra())? $palabra3->getPalabra():''; ?>"> 
                     <!--En caso de alguin error, se mostrara un mensaje. -->
                     <!--En caso de alguin error, se mostrara un mensaje. -->
                     <?php  if(empty($palabra3->getPalabra())){ ?>
                            <?php if(!$palabra3->isValid()) : ?>
                                <span class="help-inline"> <?php echo  $palabra3->getPalabraError() ?> </span>
                            <?php  endif ; ?>
                        <?php }else{  ?>
                            <!--Validacion de la palabra si es un palindromo. En caso de serlo o no, se mostrara un texto con una clase de css definida. -->
                            <?php if($palabra3->isPalindromo()) { ?>
                                <span id="palabra3" class="help-inline"> <?php echo  $palabra3->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color verde.-->
                                <script type="text/javascript">  $("#palabra3").addClass("success-text"); </script>;
                            <?php }else{ ?>
                                <span id="palabra3" class="help-inline"> <?php echo  $palabra3->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color rojo.-->
                                <script type="text/javascript">  $("#palabra3").addClass("error-text"); </script>;
                            <?php } ?>  
                        <?php } ?>     
                </div>

                  <!--Palabra4 field.-->
                <div class="form-group format-form-item">
                    <label for="">Palabra</label>
                    <input class="form-control" type="text" name="palabra4" placeholder="Ingresar palabra" value="<?php echo !empty($palabra4->getPalabra())? $palabra4->getPalabra():''; ?>">  
                     <!--En caso de alguin error, se mostrara un mensaje. -->
                     <?php  if(empty($palabra4->getPalabra())){ ?>
                            <?php if(!$palabra4->isValid()) : ?>
                                <span class="help-inline"> <?php echo  $palabra4->getPalabraError() ?> </span>
                            <?php  endif ; ?>
                        <?php }else{  ?>
                            <!--Validacion de la palabra si es un palindromo. En caso de serlo o no, se mostrara un texto con una clase de css definida. -->
                            <?php if($palabra4->isPalindromo()) { ?>
                                <span id="palabra4" class="help-inline"> <?php echo  $palabra4->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color verde.-->
                                <script type="text/javascript">  $("#palabra4").addClass("success-text"); </script>;
                            <?php }else{ ?>
                                <span id="palabra4" class="help-inline"> <?php echo  $palabra4->getPalabraError() ?> </span>
                                 <!--Agrego clase con jQuery. Dicha clase le da formato al texto de color rojo.-->
                                <script type="text/javascript">  $("#palabra4").addClass("error-text"); </script>;
                            <?php } ?>  
                        <?php } ?>   
                </div>

                <!--Submit Form-->
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Buscar palindromos</button>
                    <a class="btn btn-info" href="site.php">Regresar a inicio</a>
                </div>
            </form>
    </div>

<!-- Agrego el footer de la pagina.  -->
<?php include_once('partials/footer.php') ?>