<?php
require('dbcon.php');
$email = $_GET['email'];
$sql = "UPDATE enable set enable='0' where email='$email'";
header('./main.php');
?>