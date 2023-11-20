<form action='9_contras.php' method='post'>
¿Cuantas contraseñas?
<input type='text' name='numero'><br>
¿De qué longitud?
<input type='text' name='longitud'><br>
<input type='submit' value='Enviar'>
</form>

<?php

$n = $_POST["numero"];
$l = $_POST["longitud"];

$mayus=array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$minus=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$numeros=array("0","1","2","3","4","5","6","7","8","9");
$simbolos=array("!","#","$","%","-","*","+","/");
// elige una posición random
$contra = "";

//Genera las contraseñas
for( $j=0; $j<$n; $j++){
//Genera los caracteres de las contraseñas
for( $x=0; $x<$l; $x++)
{
// una letra, numero y sim randoms
$letras=rand(0,25);
$num=rand(0,9);
$sim=rand(0,7);

$elige=rand(1,4);
if( $elige==1) //Una letra
{
$caracter = $mayus[$letras];
}else if( $elige==2){ // Una minus
$caracter = $minus[$letras];
}else if( $elige==3){// Un numero
$caracter = $numeros[$num];
}else if($elige==4){ // Un simbolo
$caracter = $simbolos[$sim];
}
echo $caracter;
//$contra = $caracter + $contra;
}
echo "<br>";
//echo $contra;
}
//$str = chr(046);
//echo "You $str me forever!");
?>