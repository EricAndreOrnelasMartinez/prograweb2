<html>
<head><title>Reinicio</title>
</head>
<body>
<h1>Reiniciando Contador...</h1>
<?php
session_start();
unset($_SESSION['contador']);
?>
<br><a href="ejercicio3.php">Contador Sesiones</a>
</body>
</html>