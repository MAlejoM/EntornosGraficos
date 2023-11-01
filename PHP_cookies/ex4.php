<?php

if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['noticia'])) {
  $noticia = $_POST['noticia'];
  setcookie('noticia', $noticia, time() + 3600);
}else{
  if (isset($_GET['borrar cookie'])){
    $noticia = 'todas';
    setcookie('noticia', $noticia, time() + 3600);
  }else{
    if (isset($_COOKIE['noticia'])){
      $noticia = $_COOKIE['noticia'];
    }else{
      $noticia = 'todas';
    }
  }
}

function listaNoticias($eleccion){
  switch($eleccion){
    case 'deportes':
      listaDeportes();
      break;
    case 'politica':
      listaPolitica();
      break;
    case 'economia':
      listaEconomia();
      break;
    default:
      listaDeportes();
      listaPolitica(); 
      listaEconomia();
      break;
  }
}

function listaDeportes(){
  echo '<li>River gana en el bosque de La Plata</li>';
  echo '<li>Real Madrid gana el clasico con dos goles de Bellingham</li>';
}

function listaPolitica(){
  echo '<li>Milei y Massa al balotaje<li>';
  echo '<li>Protestas en panama contra la nueva ley de mineria<li>';
}

function listaEconomia(){
  echo '<li>El dolar blue se desploma luego de las elecciones presidenciales<li>';
  echo '<li>Quiebra el gigante chino Evergrande<li>';
}
?>

<html>
  <head>
    <title>Recordar nombre</title>
  </head>

  <body>
    <h1>Noticias</h1>
    <form method="POST">
      <input type="radio" id="politica" name="noticia" value="politica">
      <label for="politica">Politica</label>
      <input type="radio" id="deporte" name="noticia" value="deporte">
      <label for="deporte">deporte</label>
      <input type="radio" id="economia" name="noticia" value="economia">
      <label for="economia">economia</label>
      <button>Cambiar seccion</button>
    </form>
    <a href='.?borrar_cookie=false'>mostrar todo</a>

    <h2>
      Seccion
      <?echo $noticia ?>
    </h2>
    <ul>
      <? listaNoticias($noticia)?>
    </ul>
  </body>
</html>