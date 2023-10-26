<?php
require_once('dbcon.php');
$opc = $_POST['opc'];
if($opc === 'opc1'){
    $sql = "SELECT * FROM `kardex` WHERE `semestre`=3";
    $res = $con->query($sql);
    echo json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
}else if($opc === 'opc2'){
    $sql = "SELECT * FROM `kardex` WHERE `status`='Aprobado'";
    $res = mysqli_query($con, $sql);
    echo json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
}else if($opc === 'opc3'){
    $sql = "SELECT * FROM `kardex` WHERE `status`='-'";
    $res = mysqli_query($con, $sql);
    echo json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
}else if($opc === 'opc4'){
    $sql = "SELECT * FROM `kardex` WHERE `status`='-'";
    $res = mysqli_query($con, $sql);
    echo json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
}else if($opc === 'opc5'){
    $sql = "SELECT * FROM `kardex` WHERE `status`='-' AND `periodo` ='20233S'";
    $res = mysqli_query($con, $sql);
    echo json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));
}else if($opc === 'opc6'){
    $sql = "SELECT sum(`creditos`) from kardex";
    $res = mysqli_query($con, $sql);
    $aux = $res->fetch_assoc();
    $ans = $aux['sum(`creditos`)'];
    echo json_encode($ans);
}else if($opc === 'opc7'){
    $sql = "SELECT avg(`cf`) from kardex where `periodo` != '' and `status` != '-'";
    $res = mysqli_query($con, $sql);
    $aux = $res->fetch_assoc();
    $ans = $aux['sum(`creditos`)'];
    echo json_encode($ans);
}
?>
