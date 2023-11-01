<?php
  $hostname = "127.0.0.1";
  $nombreUsuario = "root"; 
  $password = "root";
  $db = "ciudades";
  $link = mysqli_connect($hostname, $nombreUsuario, $password, $db) or die("Error al Conectar");
?>