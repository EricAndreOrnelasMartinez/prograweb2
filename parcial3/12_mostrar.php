<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    
    <?php

        require("conexion.php");
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	}
	//Code
        $sql="SELECT * FROM usuarios WHERE id=".$_SESSION["id"]."";
        echo "ID: ".$_SESSION["id"]."<br>";
        echo "Tipo: ".$_SESSION["tipo"]."<br>";

        $result = $conn->query($sql);

        while($row = $result->fetch_assoc() ){
                echo "Bienvenido ".$row["nombre"]."!!";

                $tipo = $row["tipo"];
                switch($tipo){
                    case 0:
                        $tipo = "Administrador";
                        break;
                    case 1:
                        $tipo = "Maestro";
                        break;
                    case 2:
                        $tipo = "Estudiante";
                        break;
                }
                echo "Eres un ".$tipo;
        }

        session_destroy();
    ?>

</body>
</html>