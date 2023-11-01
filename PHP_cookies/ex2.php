<?php

if(!isset($_COOKIE['count'])) {
  $vistos = 1;
} else {
  $vistos = $_COOKIE['count'] + 1;
}
setcookie('count', $vistos);

function getTitulo(){
  if (!isset($_COOKIE['count'])) {
    return "Bienvenido";
  } else {
    return "Bienvenido de nuevo, visitaste esta pagina: ". $_COOKIE['count'] ." veces";
  }
}
?>

<html>
  <head>
    <title>Contador</title>
  </head>

  <body>
    <h1><?php echo getTitulo(); ?></h1>
  </body>
</html>