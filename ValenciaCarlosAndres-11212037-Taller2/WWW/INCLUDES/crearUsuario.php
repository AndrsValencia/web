
<!DOCTYPE html>
<html>
<head>
	<title>Amazing Backpacks</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php

include_once("database.php");


/*Recibe información de la pagina de registro y usando esta información, agrega un nuevo
usuario a la base de datos.*/ 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$telefono = $_POST["movil"];
$direccion = $_POST["direccion"];
$pais = $_POST["pais"];

$password = $_POST["contrasena"];
$correo = $_POST["correo"];

//query que permite insertar un nuevo usuario en la tabla de usuarios con los campos que recibe del formulario de registro
$query= "INSERT INTO tiendaonline.clientes (`id`, `nombre`, `apellido`, `email`, `usuario`, `contrasena`, `movil`, `direccion`, `pais`) VALUES ('','$nombre','$apellido','$correo','$usuario','$password','$telefono','$direccion','$pais')";
//echo $query;
mysqli_query($con,$query);

//header('Location: index.php');

?>
<button type='button'><a href="../index.php">Sign in</a></button>


</body>
</html>
