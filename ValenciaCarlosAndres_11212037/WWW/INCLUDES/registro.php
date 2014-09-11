<html>
<head> 
<title> Registrarse</title>
<meta charset = "utf-8">
</head>

<body>
<?php
include_once("database.php");

//metodo encargado de seleccionar la tabla estudiantes de la base de datos y organizarlos por apellido



?>

<!-- /*Formulario que se encarga de enviar información del nuevo usuario a crear estudiante que se encarga
de subir esta información a la base de datos*/ -->
<br>
<br>
<h1>Registro</h1>


<form action="crearUsuario.php" method ="POST">

   <label>Name:</label><input type="text" name="nombre" ><br>
   <label>Lastname:</label><input type="text" name="apellido"><br>
   <label>Email:</label><input type="text" name="correo"><br>
   <label>Password:</label><input type="text" name="password"><br>
   <input type="submit" value="Registrarse">


</form>
</body>
</html>