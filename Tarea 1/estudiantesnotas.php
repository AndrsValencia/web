<?php

include_once("includes/database.php");

//metodo de seleccion para mostrar la informacion acerca de las notas de los estudiantes por medio de la seleccion de los campos de tablas anteriores

$query= "SELECT estudiantes_web.estudiantes.Nombre AS nombre, estudiantes_web.estudiantes.Apellido AS apellido,
estudiantes_web.notas.idnota,  estudiantes_web.estudiantes.Codigo AS codigo, estudiantes_web.notas.nombre AS nombreNota, 
estudiantes_web.estudiantenotas.valornota AS valorNota FROM estudiantes_web.estudiantenotas 
JOIN estudiantes_web.notas ON estudiantes_web.estudiantenotas.idnota = estudiantes_web.notas.idnota
JOIN estudiantes_web.estudiantes ON estudiantes_web.estudiantenotas.codigoestudiante = estudiantes_web.estudiantes.Codigo 
GROUP BY estudiantes_web.estudiantes.Nombre
 ";
 
$result= mysqli_query($con,$query);

echo "<table border='1'>

<tr>
    <th>codigo</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Taller 1</th>
	<th>Taller 2</th>
	<th>Taller 3</th>
	<th>Taller 4</th>
</tr>";
//se crea una tabla en donde se van a almacenar los datos acerca de la info del estudiante y de su nota respectiva

while($row = mysqli_fetch_array($result) ) {

echo"<tr>";
echo"<td>".$row["codigo"]."</td>";
echo"<td>".$row["nombre"]." </td>";
echo"<td>".$row["apellido"]."</td>";
echo"<td>".$row["valorNota"]."</td>";

$notas= mysqli_query($con,$query);


//creo un while para condicionar las notas respectivas con el codigo del estudiante
while($datos = mysqli_fetch_array($notas)){

if($row["codigo"]==$datos["codigo"]){


   }
  }
 }

echo "</table>";


?>
