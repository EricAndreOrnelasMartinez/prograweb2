<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('dbcon.php');
session_start();
$nombre = $_SESSION['name'];
$type = $_SESSION['type'];
if(!isset($nombre)){
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
    <form id="info">
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
</html>