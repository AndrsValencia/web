	<!DOCTYPE html>
	<html>
	<head>
		<title>Amazing Backpacks-Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" href="CSS/styles.css">
		<script type="text/javascript" src="../JS/jquery.js"></script>
		<script type="text/javascript" src="../JS/code.js"></script>

	</head>
	<body>
	   <div id="contenedor">
	   <header>
	   	   	   			<div id="nombre" class="user">
					<?php
						echo "<h1>Amazing Backpacks</h1>";
						echo "<h2 >";
						echo "Bienvenido,  ".$_SESSION['user'];
						echo "</h2>";
						echo '<div class="logout"><a href="logout.php">Logout</a></div>';
					?>
				</div>
	   </header>
	   		<div class="barranavegacion">
				<nav>
					<ul class="list-inline list">
							<li class="lista"><a href="home.php"><h3>Home</h3></a></li>
							<li class="lista"><a href="catalogo.php"><h3>Catalogo</h3></a></li>
							<li class="lista"><a href="carrito.php"><h3>Carro</h3></a></li>
						</ul>
					</nav>
			</div>

			<div id="carrito">carrito</div>

	   <section>
	   	<?php
			include_once("INCLUDES/database.php");

			$query=" SELECT * FROM productos";
			$result = mysqli_query ($con,$query);

			while ($row = mysqli_fetch_array($result)) {

				echo "<div class='item'>";
				echo "<div class='contenido'>";
				echo "<h3>".$row['nombre']."</h3>";
				echo "<p>".$row['descripcion']."</p>";
				echo "<div class='imagen'>";
				echo "<img src='IMG/".$row['imagen']."' width=100px height=100px>";
				echo "</div>";
				echo "<h4>"."Precio:".$row['precio']."</h4>";
				echo "<h5>"."En Existencia:".$row['existencias']."</h5>";
				echo  '<div class="logout">';
				echo "<button value='".$row['id']."' class='botoncompra'>Añadir a Carrito</button>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
			}



			?>
	   </section>
	   <footer></footer>
	   </div>
	</body>
	</html>