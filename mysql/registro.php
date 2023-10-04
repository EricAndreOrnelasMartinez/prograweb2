<?php 
$servername = "localhost";
$username = "andre";
$password = "";
$dbname = "hola";
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