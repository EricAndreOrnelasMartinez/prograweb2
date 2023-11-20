<html>
<head>
</head>
<body>
Alta
<form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . $conn->connect_error);
}

$n=$_POST["nom"];
$a=$_POST["ape"];
$e=$_POST["email"];
$sql = "INSERT INTO MyGuests (firstname,lastname,email)
 VALUES ('".$n."','".$a."','".$e."')";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error " . $sql."<br>".$conn->error;
}
mysqli_close($conn);
?>
</form>
</body>
</html>