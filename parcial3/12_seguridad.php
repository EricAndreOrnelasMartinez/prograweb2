<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php      
    require("dbcon.php");
	// Check connection
	if ($con->connect_error) {
	 die("Connection failed: " . $con->connect_error);
	}
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        //echo $usuario." ".$password."<br>";
        if($usuario!="" && $password!=""){
            $sql = "SELECT user,pass,id,tipo FROM usuarios";
            $result = $con->query($sql);	    
	    
            while($row = $result->fetch_assoc() ){
                if($row["user"]==$usuario && $row["pass"]==$password ){
                    $_SESSION["id"]=$row["id"];
                    $_SESSION["tipo"]=$row["tipo"];
                    echo "ID: ".$_SESSION["id"]."<br>";
                    echo "Tipo: ".$_SESSION["tipo"]."<br>";
                    //header("http://localhost/Portafolio/Proyecto/mostrar.php");
                    echo "<a href='12_mostrar.php'> Ir </a>";
                }else{
		//echo $row["id"];
		//echo "El usuario o la contrasena no son correctos<br>";
		//break;
		}
            }
        } // Los campos se muestran?
        else{
            echo "Los campos estan vacios";
        }
    ?>
    
</body>
</html>