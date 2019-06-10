
<?php

require_once("helpers.php");

require_once("controladores/funciones.php");

$titulo = "Registro";

if($_POST) {
  $errores = validar($_POST,'registro');
  if(existeUsuario($_POST["email"])){
    $errores["email"] = "El email está asociado con otre usuarie";
  } else {

  if(count($errores)== 0){
    $avatar = armarAvatar($_FILES, $_POST["email"]);
    $usuario = armarUsuario($_POST, $avatar);
    guardarUsuario($usuario);
    header("location: login.php");
    exit;
  }
}
}
 ?>

<!DOCTYPE html>
<html lang="es">
<?php
require_once("php/head.php");
 ?>
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
          <?php if(isset($errores)) :?>
            <ul class="alert alert-danger">
              <?php foreach ($errores as $key => $value) :?>
                <li> <?=$value?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <form class="registro" action="registro.php" method="post" enctype= "multipart/form-data">


            <label for="nombre">Nombre de usuario*</label>
            <input type="text" name="nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>" required>
            <label for="email">Tu correo electrónico*</label>
            <input type="email" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>" required>
            <label for="password">Contraseña*</label>
            <input type="password" name="password" value=""required>
            <label for="repassword">Repetir contraseña*</label>
            <input type="password" name="repassword" value=""required>
            <label for="avatar">Foto de tu perfil:</label>
            <input  type="file" name="avatar" value="">
            <button class="btn-formulario" type="submit" name="submit">¡Registrarme!</button>
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
