<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssforcitis.css">
    <title>Registros</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>Nombre</td>
                <td>Email</td>
                <td>Pregunta 1</td>
                <td>Pregunta 2</td>
                <td>Pregunta 3</td>
                <td>Pregunta 4</td>
                <td>Pregunta 5</td>
                <td>Pregunta 6</td>
                <td>Pregunta 7</td>
                <td>Pregunta 8</td>
                <td>Pregunta 9</td>
                <td>Pregunta 10</td>
                <td>Pregunta 11</td>
                <td>Pregunta 12</td>
                <td>Resultado</td>
            </tr>
        </thead>
        <?php
        require_once('dbcon.php');
        $sql = "SELECT * FROM test"; 
        $res = $conn->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                ?> 
                <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['pre1'] ?></td>
                <td><?php echo $row['pre2'] ?></td>
                <td><?php echo $row['pre3'] ?></td>
                <td><?php echo $row['pre4'] ?></td>
                <td><?php echo $row['pre5'] ?></td>
                <td><?php echo $row['pre6'] ?></td>
                <td><?php echo $row['pre7'] ?></td>
                <td><?php echo $row['pre8'] ?></td>
                <td><?php echo $row['pre9'] ?></td>
                <td><?php echo $row['pre10'] ?></td>
                <td><?php echo $row['pre11'] ?></td>
                <td><?php echo $row['pre12'] ?></td>
                <td><?php echo $row['resultado'] ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>
</html>