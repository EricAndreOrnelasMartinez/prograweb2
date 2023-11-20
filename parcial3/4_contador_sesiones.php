<?php
session_start();
if(!isset($_SESSION['contador']))
 $_SESSION['contador']=0; 
else $_SESSION['contador']++;
echo "Visitas:".$_SESSION['contador'];
?>
<html>
<head><title>HOME</title>
</head>
<body>
<h1>Contador con Sesiones</h1>
<br><a href="4_reiniciaCont.php">Reiniciar contador</a>
</body> 
</html>
