<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
echo "Estas son tus variables de sesión: <br>";
echo "Color favorito = ".$_SESSION["favcolor"]."<br>";
echo "Animal favorito = ".$_SESSION["favanimal"]."<br>";

$_SESSION["favcolor"]="Red";
$_SESSION["favanimal"]="Turtle";

//session_destroy();
echo "<a href='verifica2.php'>Verifica 2</a>";
?>
</body>