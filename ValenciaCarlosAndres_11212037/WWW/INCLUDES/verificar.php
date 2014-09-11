<?php

session_start();

include_once("database.php");


//recibe los parametros de correo y contraseña para verificar la existencia del usuario

$correo= $_POST['correo'];
$password= $_POST['password'];

//se crea una condicion para poder verificar los datos insertados en los campos

if(isset($correo) && !empty($correo) && isset($password) && !empty($password)){

    //se crea un query donde se selecciona el correo que es insertado sea igual a alguno perteneciente a la base de datos

	$query = " SELECT talleruno.usuario.Correo , talleruno.usuario.Password from talleruno.usuario WHERE `Correo` = '$correo'";
    $result = mysqli_query ($con,$query);
    //verifica si la contraseña que es insertada pertenece a la del usuario correspondiente, si no es asi no permitira entrar al usuario a su perfil
    while($row = mysqli_fetch_array($result)) {
    	if($password == $row['Password']){
    		$_SESSION['correo']=$correo;

    		echo "session good  :D";
    		header('Location: perfilUsuario.php');
    	}else{
    		
    	    header('Location: index.php');
             echo "Usuario o contraseña incorrecta";
    	}

      }
   }else{

	 	header('Location: index.php');
            echo "debe llenar todos los campos";
}
?>
