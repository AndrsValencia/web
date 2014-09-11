
<html>
<head> 
<title> Bienvenido</title>
<meta charset = "utf-8">
</head>

<body>

<?php


include_once("database.php");
//query utilizado para seleccionar todos los datos de la tabla del usuario para poder mostrarlas
$query="SELECT * FROM talleruno.usuario";
$resultado=mysqli_query($con,$query);

while ($row=mysqli_fetch_array($resultado)) {
 echo"<tr>";
    echo   $row['Nombre']." ". $row['Apellido'] . " ". $row['Correo']." ". "<br />";
 echo"</tr>";
}

//query que se utiliza oara selecciona el dato del correo de cada usuario, el id de las tareas, su descripcion y prioridad de las tablas tarea y usuario y unirlas a una nueva tabla para mostrar la tarea dada a cada usuario y su prioridad
$quer= "SELECT talleruno.usuario.Correo AS correo,talleruno.tarea.idTarea,talleruno.tarea.Descripcion AS descripcion, 
talleruno.tareausuario.prioridad AS prioridad FROM talleruno.tareausuario 
JOIN talleruno.tarea ON talleruno.tarea.idTarea = talleruno.tarea.idTarea
JOIN talleruno.usuario ON talleruno.tareausuario.Correo = talleruno.usuario.Correo 
JOIN talleruno.tarea ON talleruno.tareausuario.prioridad = talleruno.tarea.prioridad
ORDER BY prioridad
 ";
 
$result= mysqli_query($con,$quer);
//se crea una tabla en donde se van a almacenar los datos acerca de la tarea
echo "<table border='1'>
<tr>
    <th>idTarea</th>
    <th>Correo</th>
    <th>Descripcion</th>
    <th>Prioridad</th>
</tr>";

while($row = mysqli_fetch_array($result) ) {

echo"<tr>";
echo"<td>".$row["idTarea"]."</td>";
echo"<td>".$row["correo"]."</td>";
echo"<td>".$row["descripcion"]." </td>";
echo"<td>".$row["prioridad"]."</td>";


$tarea= mysqli_query($con,$quer);


//creo un while para condicionar las notas respectivas con el codigo del estudiante
while($datos = mysqli_fetch_array($tarea)){

if($row["correo"]==$datos["correo"]){


   }
  }
 }

echo "</table>";

?>



<button type='button'><a href="AgregarTarea.php">Agregar tarea</a></button>
<br>
<br>
<br>
<button type='button'><a href="index.php">log out</a></button>



</body>
</html>