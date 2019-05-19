<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/registro.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

    <title>Jugar</title>
  </head>
  <body>
    <div class="container-fluid p-0">
      <nav>
        <?php include('php/header.php'); ?>
      </nav>

      <section>
        <div class="tarjetaJuegoA">
          <?php require_once('php/baseDatos.php');
          foreach ($titulo as $key): ?>
          <h2 class="tituloA"><?=$key["Pregunta"]?></h2>


            <div class="pregunta">
              <div class="respuesta">
                <button type="button" name="button">Stephen Hawking</button>
              </div>

              <div class="respuesta">
                <button type="button" name="button">N'sync</button>
              </div>

              <div class="respuesta">
                <button type="button" name="button">Kid Rock</button>
              </div>

              <div class="respuesta">
                <button type="button" name="button">Backstreet Boys</button>
              </div>

            </div>
      <?php endforeach; ?>
        </div>
      </section>

      <footer>
      <?php include('php/footer.php'); ?>
      </footer>

    </div>
  </body>
</html>
