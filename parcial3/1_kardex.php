<html>
<head>
    <title></title>
</head>
<body>
    <h1>Consulta Kardex</h1>

    <form action="1_kardex.php" method="post">
        <label for="opc">Elige tu consulta:</label>
        <select id="opc" name="opc">
            <option value="1">Consulta 1</option>
            <option value="2">Consulta 2</option>
            <option value="3">Consulta 3</option>
            <option value="4">Consulta 4</option>
            <option value="5">Consulta 5</option>
            <option value="6">Bonus</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <p>
    <?php
require("conexion.php");

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // CÓDIGO
    if (isset($_POST['opc'])) { // Checa si hay un valor
        $opc = $_POST['opc'];

        // Consultas
        switch ($opc) {
            // MATERIAS DEL 3ER SEMESTRE
            case "1":
                echo "Materias del 3er semestre<br><br>";
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
                break;
		// MATERIAS APROBADAS
            case "2":
                echo "Materias Aprobadas<br><br>";
                $sql = "SELECT sem,materia FROM `Kardex` WHERE STATUS = 'Aprobado'";
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
                break;
		//MATERIAS PENDIENTES
            case "3":
                echo "Materias pendientes<br><br>";
                $sql = "SELECT sem,materia FROM `Kardex` WHERE STATUS = '-'";
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
                break;
            case "4":
	    // CRÉDITOS ACUMULADOS
                echo "Créditos acumulados<br>";
                $sql = "SELECT SUM( creditos )as Tcred FROM Kardex;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table border='1'><th>Créditos</th>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['Tcred'] . "</td></tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No se encontraron resultados.";
                }
                break;
		//PROMEDIO ACUMULADO
            case "5": 
                echo "Promedio acumulado<br>";
                $sql = "SELECT AVG( cf ) as prom FROM `kardex` WHERE STATUS = 'Aprobado' and SECCION!='rev'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table border='1'><th>Promedio</th>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['prom'] . "</td></tr>";
                    }

                    echo "</table>";
                } else {
                    echo "No se encontraron resultados.";
                }
                break;
		// BONUS
            case "6":
                echo "Materias cursadas en otoño 2023<br>";
                $sql = "SELECT materia FROM `kardex` WHERE status='-' and periodo='20233S'";
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
                break;

            default:
                break;
        }
    }
    $conn->close();
    ?>
    </p>
</body>
</html>
