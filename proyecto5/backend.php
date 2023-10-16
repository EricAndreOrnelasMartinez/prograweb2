<?php
$servername = "localhost";
$username = "andre";
$password = "hola";
$dbname = "mydb1";
$conn = new mysqli($servername, $username, $password, $dbname);
$op = $_POST['op'];
$id = $_POST['id'];

if($op === "Consultar"){
    $sql = "select * from myguests where id='$id'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        $row = $res->fetch_assoc();
        echo json_encode($row);
    }else{
        echo json_encode("No existente");
    }
}else if($op === "Borrar"){
    $sql = "delete * from myguest where id='$id'";
    if($conn->query($sql) === True){
        echo json_encode("Borrado!");
    }else{
        echo json_encode("Error al borrar");
    }
}else{
    $sql = "select * from myguests where id='$id'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        $row = $res->fetch_assoc();
        echo json_encode($row);
    }else{
        echo json_encode("No encontrado");
    }
}

?>