<?php
require_once("controladores/funciones.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato|Righteous" rel="stylesheet">
    <title>Preguntas Frecuentes - Seriales</title>

    <link rel="stylesheet" href="css/master.css">

  </head>
  <body>
    <div class="container-fluid p-0">
      <?php
      require_once('php/header.php');
      ?>
 <main class="main-pf">


        <section class="preguntas-frecuentes">
          <div class="accordion" id="accordionExample">
            <?php
            require_once('php/baseDatos.php');
            foreach ($preguntas as $key):?>
                    <div class="card">
                      <?php
                      $card="collapse";
                      $card=($key["Numero"]!="#1")?"collapse":"collapse";?>

                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="font-preguntas btn btn-link" type="button" data-toggle="collapse" data-target="<?= $key["Target"]?>" aria-expanded="true" aria-controls="<?= $key["idCollapse"]?>">
                                 <?=$key["Numero"]?>
                                 <?=$key["Nombre"]?>

                          </button>
                        </h2>
                      </div>

                  <div id="<?= $key["idCollapse"]?>" class="<?=$card?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                          <?=$key["Descripcion"]?>
                      </div>
                    </div>
                </div>

              <?php endforeach;?>

    </div>
  </div>

        </section>


        <?php
        require_once('php/footer.php');
         ?>




    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</main>
      </body>
</html>
