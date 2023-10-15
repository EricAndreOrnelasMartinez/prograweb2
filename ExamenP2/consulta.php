<?php 
require_once('dbcon.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');

$email = $_POST['email'];

if(isset($email)){
    $sql = "SELECT * FROM test WHERE email='$email'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        echo json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
    }else{
        echo json_encode('2');
    }
}else{
    echo json_encode('0');
}

?>