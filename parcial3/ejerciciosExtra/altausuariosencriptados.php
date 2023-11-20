<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto";
//Create connection
$conn= new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
$contra="123456";
$contra2=md5($contra);
$sql = "INSERT INTO usuarios (user, pass, nombre, email, tipo)
VALUES ('dmartinez', '$contra2', 'Daniel Marrtinez', 'dmartinez@example.com','2')";
if($conn->query($sql) === TRUE) {
echo "New record created successfully";
}else{
echo "Error: ". $sql . "<br>" . $conn->error;
}
$conn->close();
?>