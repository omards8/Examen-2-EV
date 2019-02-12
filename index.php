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
      $resultado = $conector->query("SELECT * FROM partido");

        }
          ?>

          <table>
            <tr>
              <td>ID partido</td>
              <td>Local</td>
              <td>Visitante</td>
              <td>Resultado</td>
            </tr>

            <?php
            foreach ($resultado as $partido) {
              echo "<tr>";
              echo "<td>".$partido['id_partido']."</td>";
              echo "<td> <a href=equipo.php?equipo=".$partido['local'].">".$partido['local']."</a></td>";
              echo "<td> <a href=equipo.php?equipo=".$partido['visitante'].">".$partido['visitante']."</a></td>";
              echo "<td>".$partido['resultado']."</td>";
              echo "<tr>";
            }
            ?>
          </table>
        </body>
      </html>
