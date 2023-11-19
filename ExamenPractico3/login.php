<?php
require('dbcon.php');
$name = $_POST['password'];
$email = $_POST['email'];
$sql = "SELECT * FROM usuarios where email='$email'";

$res = $conn->query($sql);

if($res->num_rows > 0){
    $sql = "SELECT password from usuarios where email='$email'";
    $res = $conn->query($sql);
    echo json_encode($res);
}else{
    echo json_encode('0');
}


