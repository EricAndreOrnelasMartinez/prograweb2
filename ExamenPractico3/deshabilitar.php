<?php
require('dbcon.php');
$email = $_GET['email'];
$sql = "UPDATE enable set enable='0' where email='$email'";
$conn->query($sql);
header('./main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>