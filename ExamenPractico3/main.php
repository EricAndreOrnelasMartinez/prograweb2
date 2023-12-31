<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('dbcon.php');
session_start();
$nombre = $_SESSION['name'];
$type = $_SESSION['type'];
if(!isset($nombre) || empty($nombre)){
    header('./index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h1>Hola <?php echo $nombre?>!!</h1>
    <a href="./"><button type='button'>Salir</button></a>
    <?php
        if($type == 0){
            $sql = "SELECT * FROM usuarios";
            $res = $conn->query($sql);
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Usuario</th>";
            echo "<th>Nombre</th>";
            echo "<th>Email</th>";
            echo "<th>tipo</th>";
            echo "<th>-</th>";
            echo "<th>-</th>";
            echo "</tr>";
            while($row = $res->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td><a href="./deshabilitar.php?email=<?php echo $row['email'];?>"><button>Deshabilitar</button></a></td>
                        <td><a href="./habilitar.php?email=<?php echo $row['email'];?>"><button>Habilitar</button></a></td>
                    </tr>
            <?php
            }
            echo "</table>";
        }
    ?>
    <form id="formulario">
        <h2>Consultas</h2>
        <select name="opc">
            <option value="opc1">Consulta 1</option>
            <option value="opc2">Consulta 2</option>
            <option value="opc3">Consulta 3</option>
            <option value="opc4">Consulta 4</option>
            <option value="opc5">Consulta 5</option>
            <option value="opc6">Consulta 6</option>
            <option value="opc7">Consulta 7</option>
        </select>
        <input type="submit" value="Consulta">
    </form>
    <table border="1" id="table">

    </table>
    
</body>
<script src="./principal.js"></script>
</html>