<?php
require('dbcon.php');
$pass = $_POST['password'];
$email = $_POST['email'];
$sql = "SELECT * FROM usuarios where email='$email'";

$res = $conn->query($sql);

if($res->num_rows > 0){
    $sql = "SELECT password from usuarios where email='$email'";
    $res = $conn->query($sql);
    while($row = $res->fetch_assoc()){
        if($pass == $row){
            echo json_encode('2');
        }else{
            echo json_encode('1');
        }
    }
}else{
    echo json_encode('0');
}


