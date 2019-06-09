<?php
?>
<header>
  <nav>
    <ul class="row">
      <img class="offset-3 col-6 col-md-2 offset-md-0 logo" src="img/logoSerialesFB.png" alt="Seriales">
      <li class="col-12 flex-column flex-md-row col-md-2 menu-items"><a href="index1.php">inicio</a></li>
      <li class="col-12 flex-column flex-md-row col-md-2 menu-items"><a href="preguntas.php">preguntas</a></li>
      <li class="col-12 flex-column flex-md-row col-md-2 menu-items"><a class="play-btn" href="juego.php">jugar</a></li>
      <li class="col-12 flex-column flex-md-row col-md-2 menu-items">
        <?php if(isset($_SESSION["email"])): ?>
          <a href="perfil.php">mi perfil</a>
          <?php else: ?>
          <a href="registro.php">registro</a>
        <?php endif; ?>

        </li>
      <li class="col-12 flex-column flex-md-row col-md-2 menu-items">
        <?php
        if(isset($_SESSION["email"])): ?>
          <a href="logout.php">desloguearme</a>
          <?php else: ?>
          <a href="login.php">login</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>

  <?php
  if(isset($_SESSION["email"])){
    require_once('php/bienvenida.php');

  }
  ?>
</header>
