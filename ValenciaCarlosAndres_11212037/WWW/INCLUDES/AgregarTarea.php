<html>
<head> 
<title> Agregar tarea</title>
<meta charset = "utf-8">
</head>

<body>
<?php
include_once("database.php");

//metodo encargado de seleccionar la tabla estudiantes de la base de datos y organizarlos por apellido



?>

<!-- /*Formulario que se encarga de enviar información de la nueva tarea a crear  y se encarga
de subir esta información a la base de datos*/ -->

<h1>Agregar tarea</h1>


<form action="tareas.php" method ="POST">

   <label>Start date:</label><input type="date" name="FechaInicio" ><br>
   <label>finish date:</label><input type="date" name="FechaFinal"><br>
   <label>Description:</label><input type="text" name="Descripcion"><br>
   <label>Prioridad<label><input type="number" name="Prioridad" min="1" max="3"><br>


   <input type="submit" value="Agregar tarea">


</form>
</body>
</html>