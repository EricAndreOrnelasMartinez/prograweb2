<?php
session_start();
if(!isset($_SESSION['nombre'])){
    header('./index.html');
}
$nombre = $_SESSION['nombre'];
$type = $_SESSION['type'];
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
    
</body>
</html>