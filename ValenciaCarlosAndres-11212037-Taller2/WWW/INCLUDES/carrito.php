<?php
//echo $_GET['p'];


include_once("database.php");


 session_start();
  $suma=0;

 if (isset($_GET['p'])) {
 $_SESSION['producto'][$_SESSION['contador']]=$_GET['p'];
 $_SESSION['contador']++;
 }
 
 echo "<table>";

for ($i=0; $i < $_SESSION['contador'] ; $i++) { 


	//echo "Producto: ".$_SESSION['producto'][$i]."<br>";
	
		$query="SELECT * FROM productos WHERE id=".$_SESSION['producto'][$i]."";
		$result = mysqli_query ($con,$query);

		while ($row = mysqli_fetch_array($result)) {
			echo "<tr><td>".$row['nombre']."</td><td>".$row['precio']."</td></tr>";
            $suma+=$row['precio'];
		}
		
}
echo "<tr><td>Subtotal</td><td>".$suma."</td></tr>";
echo "</table>";


?>