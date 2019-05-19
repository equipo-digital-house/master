<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Seriales - Registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato|Righteous" rel="stylesheet">
  <link rel="stylesheet" href="css/registro.css">
</head>
<body>
  <div class="container-fluid p-0">
    <?php
    require_once('php/header.php');
    ?>

    <main>
      <h3 class="subtitulo">¿Todavía no tenés cuenta?</h3>
      <h2 class="titulo">Registrate en segundos</h2>
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
          <form class="registro" action="jugar.php" method="post">
            <label for="nombre">Nombre de usuario*</label>
            <input type="text" name="nombre" value="" required>
            <label for="mail">Tu correo electrónico*</label>
            <input type="email" name="mail" value="" required>
            <label for="contrasenia">Contraseña*</label>
            <input type="password" name="contrasenia" value=""required>
            <button class="btn-formulario" type="submit" name="submit">Jugar!</button>
          </form>          
        </div>
      </div>
      <p class="aclaracion">Los campos con * deben ser completados</p>
    </main>

    <?php
    require_once('php/footer.php');
    ?>
  </div>
</body>
</html>
