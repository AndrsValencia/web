<html>
<head> 
<title> NOTAS ESTUDIANTES </title>
<meta charset = "utf-8">
</head>

<body>
<?php
include_once("includes/database.php");

//metodo encargado de seleccionar la tabla estudiantes de la base de datos y organizarlos por apellido
$query= "SELECT * FROM estudiantes_web.estudiantes ORDER BY apellido";
$result= mysqli_query($con,$query);

//print_r($result);
echo "<br /><br /><br />";
echo "<table>
<tr></tr>";

//metodo que se utiliza para agregar la informacion del estudiante

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Nombre'] . " " . $row['Apellido'] . " " . $row['Codigo'] . " " . $row['Correo'] ." </td>";
}

echo "</table>";
mysqli_close($con);
?>

<!-- /*Formulario que se encarga de enviar información del nuevo estudiante a crear estudiante que se encarga
de subir esta información a la base de datos*/ -->
<br>
<br>
<h1>Crea un nuevo estudiante</h1>


<form action="includes/crearEstudiante.php" method ="POST">

   <label>Nombre:</label><input type="text" name="nombre" ><br>
   <label>Apellido:</label><input type="text" name="apellido"><br>
   <label>Codigo:</label><input type="text" name="codigo"><br>
   <label>Correo:</label><input type="text" name="correo"><br>
   <input type="submit" value="Enviar">

</form>

<br>
<br>

<h1>buscar estudiante</h1>
<form action="includes/select.php" method ="POST" name="frm">

 <label>Codigo:</label><input type="text" name="codigo"><br>
  <input type="submit" value="Seleccionar">

</form>

</body>
</html>