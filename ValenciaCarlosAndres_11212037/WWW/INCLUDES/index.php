<!-- /*Este taller fue realizado por carlos andres valencia, con la ayuda otorgada por maria alejandra moreno, juan carlos micolta 
tambien se le amerita ayuda de http://www.w3schools.com/php/default.asp y de https://www.youtube.com/playlist?list=PLF02659CF8418C229 */ -->

<html>
<head> 
<title> TaskMate</title>
<meta charset = "utf-8">
</head>

<body>
<?php
include_once("database.php");



?>

<h1>Welcome to TaskMate</h1>

<!-- /*Formulario que se encarga de enviar información del  usuario que se encarga
de corroborar esta información a la base de datos del usuario y verificar si es un usuario valido*/ -->

<form action="verificar.php" method ="POST">

   <label>Correo:</label><input type="text" name="correo" ><br>
   <label>Contraseña:</label><input type="text" name="password"><br>
   <input type="submit" value="Log in">

</form>

<button type='button'><a href="registro.php">Sign in</a></button>

</body>
</html>



