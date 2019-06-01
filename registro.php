
<?php

require_once("helpers.php");

require_once("controladores/funciones.php");

if($_POST) {

  $errores = validar($_POST);
  if(count($errores)== 0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST, $avatar);
    guardarUsuario($usuario);
    header("location: login.php");
    exit;
  }
}
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Seriales - Registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato|Righteous" rel="stylesheet">
  <link rel="stylesheet" href="css/master.css">
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
          <form class="registro" action="registro.php" method="post" enctype= "multipart/form-data">
            <label for="nombre">Nombre de usuario*</label>
            <input type="text" name="nombre" value="" required>
            <label for="mail">Tu correo electrónico*</label>
            <input type="email" name="mail" value="" required>
            <label for="password">Contraseña*</label>
            <input type="password" name="password" value=""required>
            <label for="repassword">Repetir contraseña*</label>
            <input type="password" name="repassword" value=""required>
            <label for="avatar">Foto de tu perfil:</label>
            <input  type="file" name="avatar" value=""/>
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
