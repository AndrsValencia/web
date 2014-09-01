<?php

include_once("includes/database.php");

$query= "SELECT * FROM estudiantesweb.estudiante";

$result= mysqli_query($con,$query);

print_r($result);

echo "<br /><br /><br />";

echo "<table border='1'>

<tr>
<th>nombre</th>
<th>apellido</th>
<th>codigo</th>
<th>correo</th>
</tr>";

while($row = mysqli_fetch_array($result)) {

  
  echo "<br /><br /><br />";

  echo "<tr>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['apellido'] . "</td>";
  echo "<td>" . $row['codigo'] . "</td>";
  echo "<td>" . $row['correo'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);

?>





