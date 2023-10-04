<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bucle while</h1>
    <form action="whileB.php" method="post">
        <label for="filas">filas</label>
        <input type="number" name="filas" id="veces">
        <label for="col">Columnas</label>
        <input type="number" name="col" id="col">
        <label for="color">Color</label>
        <input type="text" name="color" id="color">
        <input type="submit" value="Enviar">
    </form>
    <table border='1'>
    <?php
    if(isset($_POST['filas']) && isset($_POST['col']) && isset($_POST['color'])){
        $filas = $_POST['filas'];
        $cols = $_POST['col'];
        $color = $_POST['color'];
        for($i = 0; $i < $filas; $i++){
            echo "<tr style='color: $color'>";
            for($j = 0; $j < $cols; $j++){
                echo "<td>A</td>";
            }
            echo "</tr>";
        }
    }
    ?>
    </table>
</body>
</html>