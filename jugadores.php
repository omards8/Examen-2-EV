<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $conector = new mysqli("localhost", "root", "", "Liga");
        if ($conector->connect_errno) {
            echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
        }
        else {
          $equipo = $_GET["equipo"];
          $resultado = $conector->query("SELECT * FROM jugador WHERE equipo=".$equipo);
        }
    ?>
      <table>
        <tr>
          <td>ID jugador</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Posicion</td>
          <td>ID capitan</td>
          <td>Fecha alta</td>
          <td>Salario</td>
          <td>Equipo</td>
          <td>Altura</td>
        </tr>

      <?php
      foreach ($resultado as $equipo) {
        echo "<tr>";
        echo "<td>".$equipo['id_jugador']."</td>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<td>".$equipo['apellido']."</td>";
        echo "<td>".$equipo['posicion']."</td>";
        echo "<td>".$equipo['id_capitan']."</td>";
        echo "<td>".$equipo['fecha_alta']."</td>";
        echo "<td>".$equipo['salario']."</td>";
        echo "<td>".$equipo['equipo']."</td>";
        echo "<td>".$equipo['altura']."</td>";
        echo "<tr>";
      }
      ?>
      </table>
  </body>
</html>
