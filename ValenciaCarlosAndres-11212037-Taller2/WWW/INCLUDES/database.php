<?php

//crea una conexion con la base de datos que se encuentra en el mismo ordenador

$host= "localhost";
$user= "root";
$password= "";
$db ="tiendaonline";


$con= mysqli_connect($host,$user,$password,$db) or die("Error");

?>

