<html>
<head>
<title>Consultas</title>
</head>
<body>
<form action="1_consultas.php" method="post">
Consulta
<input type="text" name="reg">
<br><br>
<select name="opc">
	<option value="1"> Consulta 1 </option>
	<option value="2"> Consulta 2 </option>
	<option value="3"> Consulta 3 </option>
	<option value="4"> Consulta 4 </option>
	<option value="5"> Consulta 5 </option>
	<option value="6"> Consulta 6 BONUS </option>
</select>
<input type="submit" value="Enviar"/>

</form>
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
// Obtener la opción seleccionada
$opcion = $_POST['opc'];
// Programa
$sql = "SELECT materia FROM kardex WHERE status = '-' AND periodo <> '20233S'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>Materias Pendientes</th>
            </tr>";

    $sig = 0;
    while ($row = $result->fetch_assoc() and $sig < 7) {
        echo "<tr><td>" . $row["materia"] . "</td></tr>";
        $sig++;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

