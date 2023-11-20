<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT materia FROM kardex WHERE sem = 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><th>materias</th>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['materia'] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
