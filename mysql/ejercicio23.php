<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

for($i = 0; $i < 200; $i++){
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John$i', 'Doe', 'john@example.com')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>