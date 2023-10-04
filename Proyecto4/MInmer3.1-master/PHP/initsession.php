<?php 

$user = $_POST['user'];
$pass = $_POST['pass'];
if(!empty($pass) && !empty($user)){
    if($pass === "admin123" && $user === "admin" ){
        echo json_encode('1');
    }else{
        echo json_encode('0');
    }
}else{
    echo json_encode('2');
}


?>