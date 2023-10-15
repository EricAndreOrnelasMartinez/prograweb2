<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('./dbcon.php');
$name = $_POST['name'];
$email = $_POST['email'];
$ans = 0;
$resultado = "";

for($i = 1; $i <= 12; $i++){
    $aux = $_POST['p'.$i];
    $ans = $ans + $aux;
}
if($ans >= 12 && $ans <= 24){
    $resultado = "sin estres";
}else if($ans <= 36){
    $resultado = "Estres leve";
}else if($ans <= 48){
    $resultado = "Estres medio";
}else if($ans <= 60){
    $resultado = "Estres alto";
}else{
    $resultado = "Estres grave";
}


$sql = "INSERT INTO test (nombre, email, pre1, pre2, pre3, pre4, pre5, pre6, pre7, pre8, pre9, pre10, pre11, pre12, resultado) VALUES ('$name', '$email', ".$_POST['p1'].", ".$_POST['p2'].", ".$_POST['p3'].", ".$_POST['p4'].", ".$_POST['p5'].", ".$_POST['p6'].", ".$_POST['p7'].", ".$_POST['p8'].", ".$_POST['p9'].", ".$_POST['p10'].", ".$_POST['p11'].", ".$_POST['p12'].", '".$resultado."')";
//echo json_encode($sql);

if($conn->query($sql) === TRUE){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>