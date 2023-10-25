<?php
require_once('dbcon.php');
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$res = $con->query($sql);
if($res->num_rows > 0){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>