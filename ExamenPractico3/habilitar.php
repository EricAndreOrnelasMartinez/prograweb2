<?php 
require('dbcon.php');
$email = $_GET['email'];
$sql = "UPDATE enable set enable='1' where email='$email'";
$conn->query($sql)
header('./main.php');
?>