
<?php
    $conector = new mysqli("localhost", "root", "", "liga");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
    else {
      $equipo = $_GET["equipo"];
      $resultado = $conector->query("SELECT * FROM equipo WHERE id_equipo=".$equipo);
    }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <table>
        <tr>
          <td>Nombre</td>
          <td>ID equipo</td>
          <td>Ciudad</td>
          <td>Web</td>
          <td>Puntos</td>
        </tr>

      <?php
      foreach ($resultado as $equipo) {
        echo "<tr>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<td>".$equipo['id_equipo']."</td>";
        echo "<td>".$equipo['ciudad']."</td>";
        echo "<td> <a href=jugadores.php?equipo=".$equipo['id_equipo'].">".$equipo['web']."</a></td>";
        echo "<td>".$equipo['puntos']."</td>";
        echo "<tr>";
      }
      ?>
            </table>
  </body>
</html>
