<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="masterjuegos.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

    <title>Jugar</title>
  </head>
  <body>
    <div class="container-fluid">
      <nav>
        <?php include('php/header.php'); ?>
      </nav>

      <section>
        <div class="tarjeta">
          <?php require_once('php/baseDatos.php');
          foreach ($titulo as $key): ?>
          <h2 class="titulo"><?=$key["Pregunta"]?></h2>


            <div class="pregunta">
              <article class="celebridad1">
                <button type="button" name="button">Stephen Hawking</button>
              </article>

              <article class="celebridad2">
                <button type="button" name="button">N'sync</button>
              </article>

              <article class="celebridad3">
                <button type="button" name="button">Kid Rock</button>
              </article>

              <article class="celebridad4">
                <button type="button" name="button">Backstreet Boys</button>
                </article>

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
