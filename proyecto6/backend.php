<?php
require_once('dbcon.php');
$usu = $_POST['usuario'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM usuarios WHERE usuario='$usu'";
$res = $conn->query($sql);
if($res->num_rows > 0){
    $aux = $res->fetch_assoc();
    if($pass === $aux['password']){
        session_start();
        $_SESSION['usuario'] = $usu;
        echo json_encode($_SESSION['usuario']);
        //echo json_encode('1');
    }else{
        echo json_encode("0");
    }
}else{
    echo json_encode("2");
}
?>