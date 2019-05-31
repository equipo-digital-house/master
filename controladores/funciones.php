<?php

require_once("helpers.php");

//FUNCION VALIDAR

function armarAvatar($imagen){

  $nombre = $imagen["avatar"]["name"];
  $ext = pathinfo($nombre, PATHINFO_EXTENSION);
  $archivoOrigen = $imagen["avatar"]["tmp_name"];
  $archivoDestino = dirname(__DIR__)
  $archivoDestino = $archivoDestino."/img/";
  $avatar = uniqid("SERIALES_");
  $archivoDestino = $archivoDestino.$avatar;
  $archivoDestino = $archivoDestino.".".$ext;
  move_uploaded_file($archivoOrigen, $archivoDestino);

  $avatar = $avatar.".".$ext;
  return $avatar;
}
