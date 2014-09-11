<?php

include_once("database.php");

/*Recibe información de la pagina de registro y usando esta información, agrega un nuevo
usuario a la base de datos.*/ 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$password = $_POST["password"];
$correo = $_POST["correo"];

echo "Mi nombre es"." ".$nombre;
echo "<br/>";
echo "Mi apellido es"." ".$apellido;
echo "<br/>";
echo "Mi password es"." ".$password;
echo "<br/>";
echo "Mi correo es"." ".$correo;

//query que permite insertar un nuevo usuario en la tabla de usuarios con los campos que recibe del formulario de registro
$query= "INSERT INTO talleruno.usuario (`idUsuario`,`nombre`, `apellido`, `correo`, `password`) VALUES ('','$nombre','$apellido','$correo','$password')";
//echo $query;
mysqli_query($con,$query);


header('Location: index.php');

?>
<button type='button'><a href="registro.php">Sign in</a></button>
