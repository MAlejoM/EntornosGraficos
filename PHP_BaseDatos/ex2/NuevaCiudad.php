<?php
  include("conexion.php");

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tiene_metro = isset($_POST['tiene_metro']) ? 1: 0;

    $ciudad = mysqli_real_escape_string($link, $ciudad);
    $pais = mysqli_real_escape_string($link, $pais);

    $sql = "INSERT INTO ciudad (ciudad, pais, habitantes, superficie, tiene_metro) VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$tiene_metro')";

    if (mysqli_query($link, $sql)) {
        header("Location: index1.php");
        exit;
    } else {
        echo "Error en la inserción de datos: " . mysqli_error($link);
    }
  }
?>

<html>
  <body>
    <h1>Nueva ciudad</h1>
    <form method="POST">
      <label>Ciudad: </label>
      <input type="text" name="ciudad" required>
      <br>

      <label>Pais: </label>
      <input type="text" name="pais" required>
      <br>

      <label>Habitantes: </label>
      <input type="number" name="habitantes" required>
      <br>

      <label>Superficie: </label>
      <input type="number" name="superficie" required>
      <br>

      <label>Tiene metro? </label>
      <input type="checkbox" name="tiene_metro">
      <br>

      <button>Guardar</button>
    </form>
  </body>
</html>