<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$servername = "localhost";
$username = "andre";
$password = "hola";
$db = "mydb1";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

?>