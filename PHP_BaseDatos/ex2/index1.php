<html>
  <body>
    <h1>Ciudades</h1>
    <a href="NuevaCiudad.php">Nueva ciudad</a>
    <a href="">Lista con paginacion</a>

    <table>
      <tr>
        <th>id</th>
        <th>ciudad</th>
        <th>pais</th>
        <th>habitantes</th>
        <th>superficie</th>
        <th>tiene metro?</th>
      </tr>
    </table>
    <?php
      include("conexion.php");
      $Result = mysqli_query($link, "SELECT * FROM ciudad");
      mysqli_close($link);
      while($row=mysqli_fetch_array($Result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['ciudad']."</td>";
        echo "<td>".$row['pais']."</td>";
        echo "<td>".$row['habitantes']."</td>";
        echo "<td>".$row['superficie']."</td>";
        echo "<td>".$row['tiene_metro']."</td>";
        echo "</tr>";}
    ?>
    
  </body>
</html>