
    <!-- obtuve ayuda de juan carlos micolta, juan fernando gordillo y andrea castañeda para la realizacion del taller -->

    <!DOCTYPE html>
    <html>
    <head>
    	<title>Amazing Backpacks</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no">
    	<link rel="stylesheet" href="CSS/style_login.css">

    </head>
    <body>
            <?php 
                session_start();
                include_once("INCLUDES/database.php");  
                  
                function verificar_login($user,$password,&$result) { 

                    $query = "SELECT * FROM tiendaonline.clientes WHERE usuario = '$user' AND contrasena = '$password'";                $rec = mysqli_query($con,$query);
                    $count = 0; 
                  
                    while($row = mysqli_fetch_array($rec)) 
                    { 
                        $count++; 
                        $result = $row; 
                    } 
                  
                    if($count == 1) 
                    { 
                        return 1; 
                    } 
                  
                    else 
                    { 
                        return 0; 
                    } 
               } 
            ?> 
            <header>
                <div id="nombre" class="user">
                <?php
    					echo "<h1>Amazing Backpacks</h1>";
    					?>
                </div>
            </header>
            <div class="contenedor">
                <form action="" method="post" class="login"> 
                    <div class="usu">
                        <div><input name="user" type="text" placeholder="Nombre"></div> 
                        <div><input name="password" type="password"placeholder="Contraseña"></div> 
                        <div><input name="login" type="submit" value="login"></div> 
                        <div class="Registrarse"><a href="registro.html">Registrate</a></div>
                    </div>
                    <?php 
                    if(!isset($_SESSION['userid'])) 
                    { 

                        if(isset($_POST['login'])) 
                        { 
                            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) 
                            { 
                                $_SESSION['userid'] = $result->Id; 
                                $_SESSION['user'] = $result->Nombre; 
                                header("location:home.php"); 

                            } 
                            else 
                            { 
                                echo '<div class="error">El usuario o contraseña es incorrecto, por favor intente nuevamente.</div>'; 
                            } 
                        } 
                    } else { 
                        echo 'Ingresaste correctamente.'; 
                        echo '<a href="logout.php">Logout</a>'; 
                    } 
                    ?>
                </form>
            </div> 
        </body>
        <footer>

        </footer>
    </html>