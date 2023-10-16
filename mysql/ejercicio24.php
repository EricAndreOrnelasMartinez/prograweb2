<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        td{
            background-color: red;
            color: blue;
        }
    </style>
    <title>Document</title>
</head>
<body>
<table border='1'>
<th>ID</th>
<th>Nombre</th>
<th>apellido</th>
<?php
$servername = "localhost";
$username = "andre";
$password = "hola";
$dbname = "myDB1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "</tr>";
}
} else {
 echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>

