<?php

include_once("database.php");

/*Recibe información de la pagina de estudiantes y usando esta información, agrega un nuevo
estudiante a la base de datos.*/ 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$codigo = $_POST["codigo"];
$correo = $_POST["correo"];

echo "Mi nombre es"." ".$nombre;
echo "<br/>";
echo "Mi apellido es"." ".$apellido;
echo "<br/>";
echo "Mi codigo es"." ".$codigo;
echo "<br/>";
echo "Mi correo es"." ".$correo;

$query= "INSERT INTO `estudiantes`(`codigo`, `nombre`, `apellido`, `correo`) VALUES ('$nombre','$apellido','$codigo','$correo')";
//echo $query;
mysqli_query($con,$query);

?>

