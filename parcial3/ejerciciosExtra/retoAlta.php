<html>
<head>
</head>
<body>
<h1> Opciones <br></h1>
<form action="retoAlta.php" method="post">
<input type="submit" name="opc" value="Alta" onclick="location.href = 'alta.php'" ><br><br>
<input type="submit" name="opc" value="Login" onclick="location.href = 'login.html'"><br>
<?php

if ( isset( $_POST['opc'] ) /*&& isset( $_POST['login'] ) */  ) {
$opc = $_POST['opc'];
//$login = $_POST['login'];
if( $opc == "Alta" ){
//echo "Su opción: ".$opc;
echo "<a href='alta.php'>a</a>";
}else{
//echo "Su opción: ".$opc;
echo "<a href='login.php'>a</a>";
}

}
?>
</form>
</body>
</head>