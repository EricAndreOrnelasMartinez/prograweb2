<?php 
require('dbcon.php');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = $_POST['pass'];
$sql = "SELECT * FROM usuarios where email='$email'";
$res = $conn->query($sql);
if($res->num_rows > 0){
    echo json_encode('2');
}else{
    $sql = "INSERT INTO usuarios(usuario,password,nombre,email,tipo) values('$usuario','$password','$nombre','$email',2)";
    $sql2 = "INSERT INTO enable(email,enable) values('$email',1)";
    if($conn->query($sql) === TRUE){
        $conn->query($sql2);
        echo json_encode('1');
    }else{
        echo json_encode('0');
    }
}