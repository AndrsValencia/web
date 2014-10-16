<?php 
session_start();
if (!isset($_SESSION['contador'])){$_SESSION['contador'] = 0;}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="JS/jquery.js"></script>
	<script type="text/javascript" src="JS/codigo.js"></script>
</head>
<body>
	<div id="contenedor">
		<header>
			<h1>Tienda</h1>
			<h2>Subtitulo Tienda</h2>

		</header>
		<div id="carrito" style="background:rgb(200,200,200); color:black;"></div>

			 Usuario Registrado<br>
			 <form action="INCLUDES/logclient.php" method="POST">
			 	<input type="text" name="usuario" placeholder="Introdusca su Usuario">
				<input type="password" name="contrasena" placeholder="Introdusca su contraseña">
				<input type="submit">
			|</form>

			 Nuevo usuario? <br>

			 <button type='button'><a href="../registro.html">Sign in</a></button>


	
		<footer></footer>
	</div>

</body>
</html>