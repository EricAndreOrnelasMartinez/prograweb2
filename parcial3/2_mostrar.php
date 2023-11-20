<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<body>
<?php
        require("conexion.php");
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	}
	if (isset($_SESSION["id"])) {
        $sql="SELECT * FROM usuarios WHERE id=".$_SESSION["id"]."";
        echo "ID: ".$_SESSION["id"]."<br>";
        echo "Tipo: ".$_SESSION["tipo"]."<br>";

        $result = $conn->query($sql);

        while($row = $result->fetch_assoc() ){
                echo "Bienvenido ".$row["nombre"]."!!<br>";

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
	} else {
	    echo "No hay una sesión activa. Por favor, inicia sesión primero.";
	}
?>
</body>
</html>