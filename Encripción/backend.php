<?php
require_once('dbcon.php');
$user = $_POST['user'];
$password = $_POST['password'];
$aux = md5($password);
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO usuarios (usuario,password,nombre,email,tipo) values('$user','$aux','$name','$email','1')";
echo json_encode($sql);

if($con->query($sql) === TRUE){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>