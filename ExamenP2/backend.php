<?php
require_once('./dbcon.php');
$name = $_POST['name'];
$email = $_POST['email'];
echo json_encode($aux);
$num = 2;
$aux = $_POST['p'.$num];
$resultado = "";
/*
for($i = 1; $i <= 12; $i++){
    $aux = $_POST['p'.$i];
    $ans += $aux;
}
if($ans >= 12 && $ans <= 24){
    $resultado = "sin estres";
}else if($ans <= 36){
    $resultado = "Estres leve";
}else if($ans <= 48){
    $resultado = "Estres medio";
}else if($ans <= 60){
    $resultado = "Estres alto";
}
$sql = "INSERT INTO test (nombre, email, preg1, preg2, preg3, preg4, preg5, preg6, preg7, preg8
, preg9, preg10, preg11, preg12, resultado) VALUES ('$name', '$email', $_POST['p1'], $_POST['p2'], 
$_POST['p3'], $_POST['p4'], $_POST['p5'], $_POST['p6'], $_POST['p7'], $_POST['p8'], $_POST['p9'],
$_POST['p10'], $_POST['p11'], $_POST['p12'], '$resultado')";
if($conn->query($sql) === TRUE){
    echo json_encode('1');
}else{
    echo json_encode('0');
}*/
?>