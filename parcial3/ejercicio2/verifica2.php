<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
echo "Estas son tus variables de sesión en verifica 2: <br>";
echo "Color favorito = ".$_SESSION["favcolor"]."<br>";
echo "Animal favorito = ".$_SESSION["favanimal"]."<br>";

echo "<a href='ejercicio1.php'>Regresar</a>";
?>
</body>