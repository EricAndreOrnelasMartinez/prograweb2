<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
$servername = "localhost";
$username = "andre";
$password = "hola";
$dbname = "mydb1";
$conn = new mysqli($servername, $username, $password, $dbname);
$name = $_POST['name'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$name', '$lastName', '$email')";

if($conn->query($sql) === TRUE){
    echo json_encode("1");
}else{
    echo json_encode("0");
}
?>