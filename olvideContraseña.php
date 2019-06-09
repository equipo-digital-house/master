<?php
include_once("controladores/funciones.php");
if($_POST){
  $errores= validar($_POST,'olvide');
  if(count($errores)==0){
    $usuario = buscarPorEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="El usuarie no existe en nuestra base de datos";
    }else{
        $registro = armarRegistroOlvide($_POST);
          header("location: olvideContraseña.php");
          exit;
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
      <h2 class="titulo">¿Olvidaste tu contraseña?</h2>
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
          <form class="contraseñaNueva" action="" method="post" enctype="multipart/form-data">
            <label for="email">Ingresá tu email*</label>
            <input type="text" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>" required placeholder="Ingresá tu email">
            <label for="password">Ingresá tu nueva contraseña*</label>
            <input type="password" name="password" value=""required placeholder="Ingresá tu contraseña nueva">
            <label for="password">Repetí tu nueva contraseña*</label>
            <input type="password" name="repassword" value=""required placeholder="Repetí tu contraseña nueva">
            <button class="btn-formulario" type="submit" name="submit">enviar</button>
            <p class="aclaracion">Los campos con * deben ser completados</p>
            </div>
          </form>
        </div>
      </div>
    </main>

    <?php
    require_once('php/footer.php');
    ?>
  </div>
</body>
</html>
