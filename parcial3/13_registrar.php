<?php 
    if(isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['password']) && isset($_POST['email']) ){

        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $conn = require("conexion.php");
        
	

    }else{
    echo "Campos vacios";
    }
?>