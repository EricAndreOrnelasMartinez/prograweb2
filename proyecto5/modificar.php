<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_POST['id'];
$name = $_POST['fname'];
$last = $_POST['lastname'];
$email = $_POST['email'];
$sql = "UPDATE myguests SET lastname='$last', firstname='$name', email='$email' WHERE id = '$id')";

if($conn->query($sql) === TRUE){
    echo json_encode("1");
}else{
    echo json_encode("0");
}

?>