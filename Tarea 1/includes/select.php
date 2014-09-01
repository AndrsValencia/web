<?php

include_once("database.php");


//metodo para seleccionar todos los datos del estudiante y sus notas por medio del codigo
$query= "SELECT * FROM estudiantes_web.estudiantenotas WHERE estudiantenotas.codigoestudiante='$_POST[codigo]'";
//echo $query;
mysqli_query($con,$query);

while($cod=mysqli_fetch($query)){

    echo $cod["codigoestudiante"]." ";
    echo $cod["idnota"]." ";
    echo $cod["valornota"]." ";

	}

?>

