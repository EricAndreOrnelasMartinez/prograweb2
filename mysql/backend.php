<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB1";
$conn = new mysqli($servername, $username, $password, $dbname);
$op = $_POST['op'];
$id = $_POST['id'];

if($op === "Consultar"){
    $sqlop = "select * from MyGuests where id='$id'";
    $result = $conn->query($sqlop);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo json_encode($row);
       }
    }else{
        $arr['id'] = 0;
        echo json_encode($arr);
    }
}else if($op === "Borrar"){
    $sqlop = "delete * from MyGuests where id='$id'";
    if($conn->query($sqlop) === TRUE){
        echo json_encode("Eliminado");
    }else{
        echo json_encode("ID no encontrado");
    }
}else{
    $sqlop = "UPDATE MyGuests SET lastname='D' WHERE id='$id'";
    if($conn->query($sqlop) === TRUE){
        echo json_encode("Modificado");
    }else{
        echo json_encode("ID no encontrado");
    }
}
?>