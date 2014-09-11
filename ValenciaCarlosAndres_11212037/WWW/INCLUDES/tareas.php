<?php

include_once("database.php");

/*Recibe información de la pagina de treas y usando esta información, agrega una nueva
tarea a la base de datos.*/ 

$FechaInicio = $_POST["FechaInicio"];
$FechaFinal = $_POST["FechaFinal"];
$Descripcion = $_POST["Descripcion"];
$Prioridad = $_POST["Prioridad"];


//query para insertar una nueva tarea en la tabla de tarea en la base de datos talleruno

$query= "INSERT INTO talleruno.tarea (`idTarea`, `FechaInicio`, `FechaFinal`, `Descripcion`, `Prioridad`) VALUES ('','$FechaInicio','$FechaFinal','$Descripcion','$Prioridad')";
//echo $query;
mysqli_query($con,$query);

header('Location: perfilUsuario.php');

?>

