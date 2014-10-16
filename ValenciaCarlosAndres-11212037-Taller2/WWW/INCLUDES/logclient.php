	<?php
		include_once("database.php");

		$contador=0;

		$query="SELECT * FROM clientes WHERE usuario = '".$_POST['usuario']."' AND contrasena = '".$_POST['contrasena']."' ";
		$result = mysqli_query ($con,$query);

		while ($row = mysqli_fetch_array($result)) {
			$contador++;

		}
		if ($contador >0) {
			echo "el usuario existe";
		}else{
			echo "usuario no existe";
		}



		?>