<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if ($_SESSION['numeroaleatorio']==$_REQUEST['numero'])
echo "Ingres� el valor correcto";
else
echo "Incorrecto";
?>
</body>
</html>