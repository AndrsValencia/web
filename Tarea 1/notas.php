<?php

include_once("includes/database.php");


//metodo para seleccionar todos los datos de la tabla de notas de la base de datos
$query= "SELECT * FROM estudiantes_web.notas";

$result= mysqli_query($con,$query);


echo "<br /><br /><br />";

echo "<table border='1'>

<tr>
<th>Notas</th>
</tr>";

//metodo para mostrar la informacion de la tabla en un cuadro 
while($row = mysqli_fetch_array($result)) {
 
  echo "<tr>";
  echo "<td>" . $row['idnota'] . $row['nombre'] .  $row['porcentaje'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);

?>