<?php
  require_once("controladores/funciones.php");
  require_once("helpers.php");

  if($_POST){
    $errores = validar($_POST,'login');

    if(count($errores) == 0){

      $usuario = buscarPorEmail($_POST["email"]);


      if($usuario == null){
        $errores["email"]= "Usuario / Contraseña invalidos";
      }else{
        if(password_verify($_POST["password"],$usuario["password"])==false){
          $errores["password"]="Usuario / Contraseña invalidos";
        }else {
          seteoUsuario($usuario,$_POST);
          if(validarAcceso()){
            header("location: juego.php");
            exit;
          }else{
            header("location: login.php");
            exit;
          }

        }
      }

      }
  }



?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Seriales - Login</title>
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
      <h3 class="subtitulo">¿Querés jugar?</h3>
      <h2 class="titulo">Iniciar sesion</h2>
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
          <?php
          if(isset($errores)):?>
          <ul class="alert alert-danger">
            <?php foreach ($errores as $key => $value) :?>
              <li><?=$value;?></li>
            <?php endforeach;?>
          </ul>

        <?php endif;?>
          <form class="registro" action="login.php" method="post">
            <label for="email">Email*</label>
            <input type="text" name="email" value="" required>
            <label for="password">Contraseña*</label>
            <input type="password" name="password" value=""required>
            <button class="btn-formulario" type="submit" name="submit">iniciar sesión</button>
            <div class="recordar">
              <input name="recordarme" type="checkbox" id="check1" value="recordarme">
              <label for="check1">Recordarme</label>
            </div>
            <a class="olvidar-pass" href="olvideContraseña.php">¿Olvidó su contraseña?</a>
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
