<?php
require('dbcon.php');
$pass = $_POST['password'];
$email = $_POST['email'];
$sql = "SELECT * FROM usuarios where email='$email'";

$res = $conn->query($sql);

if($res->num_rows > 0){
    $sql = "SELECT * from usuarios where email='$email'";
    $res = $conn->query($sql);
    //echo json_encode($res->fetch_assoc());
    $aux = $res->fetch_assoc();
    if($pass === $aux['password']){
        $sql = "SELECT * FROM enable where email='$email'";
        $res = $conn->query($sql);
        $aux = $res->fetch_assoc();
        if($aux['enable'] == 1){
            session_start();
            $_SESSION['name'] = $aux['nombre'];
            $_SESSION['type'] = $aux['tipo'];
            echo json_encode('2');
        }else{
            echo json_encode('3');
        }
    }else{
        echo json_encode('1');
    }
}else{
    echo json_encode('0');
}


