<?php
require_once("helpers.php");

//VALIDAR NOMBRE DE USUARIO
function validar($datos, $bandera) {
  $errores = [];
  if(isset($datos["nombre"])) {
    $nombre = trim($datos["nombre"]);
    if(empty($nombre)) {
      $errores["nombre"] = "Por favor, ingresá un nombre de usuario";
    }
  }
}

//FUNCION VALIDAR
function armarAvatar($imagen){

  $nombre = $imagen["avatar"]["name"];
  $ext = pathinfo($nombre, PATHINFO_EXTENSION);
  $archivoOrigen = $imagen["avatar"]["tmp_name"];
  $archivoDestino = dirname(__DIR__);
  $archivoDestino = $archivoDestino."/img/";
  $avatar = uniqid("SERIALES_");
  $archivoDestino = $archivoDestino.$avatar;
  $archivoDestino = $archivoDestino.".".$ext;
  move_uploaded_file($archivoOrigen, $archivoDestino);

  $avatar = $avatar.".".$ext;
  return $avatar;
}

//FUNCIÓN ARMAR USUARIO
function armarUsuario($datos, $avatar){

  $usuario = [
    "nombre" => $datos["nombre"],
    "email" => $datos["email"],
    "password" => password_hash($datos["password"], PASSWORD_DEFAULT),
    "avatar" => $avatar
    //"perfil" => 1
  ];
    return $usuario;
}

//GUARDAR USUARIO NUEVO EN USUARIOS.JSON
function guardarUsuario($usuario){

  $json = json_encode($usuario);
  file_put_contents("usuarios.json", $json.PHP_EOL, FILE_APPEND);
}

?>
