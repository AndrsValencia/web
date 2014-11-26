  <?php
  include_once('includes/database.php');

  
  $locacion = $_POST['marcador'];
  $result="";
  $tmp=[];
  $query = "SELECT * FROM locaciones.locaciones WHERE locaciones.tipo ='".$locacion."'";
  $resultado = mysqli_query($con,$query);
  

  while ( $row = mysqli_fetch_array($resultado) ) {
    $temp['id'] = $row["id"];
    $temp['lat'] = $row["latitud"];
    $temp['lon'] = $row["longitud"];
    $temp['nom'] = $row["nombre"];
    array_push($tmp,$temp);
  }
  $result["temps"] = $tmp;

  echo  json_encode($result);

  ?>
s