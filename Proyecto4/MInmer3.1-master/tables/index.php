<?php 
error_reporting(E_ALL);
ini_set('display_errors','1');
$city = $_GET['city'];
$con = mysqli_connect('localhost','root','Lasric.2018','Minmer2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/cssforcitis.css">
    <title><?php echo $city ?></title>
</head>
<body>
<header>
    <nav class="menu">
        <ul id="menu">
            <?php
            session_start();
            $aux = $_SESSION['nivel'];
            $rowN = $_SESSION['rowN'];
            if($aux >= 5){
                ?>
                <li><a href="../Perfil"><img src="./perfil.png" width="40"></a></li>
                <li><a href="./?city=CDMX">CDMX</a></li>
                <li><a href="./?city=GDL">GDL</a></li>
                <li><a href="./?city=MTY">MTY</a></li>
                <li><a href="./?city=CUN">CUN</a></li>
                <li><a href="./?city=SJD">SJD</a></li>
                <li><a href="./?city=QRO">QRO</a></li>
                <li><a href="../Modificaciones/">Modificaciones</a></li>
                <li><a href="../Buscar/"><img src="./Buscar.png" width="40"></a></li>
                <li><a href="../Newuser/">Nuevo usuario</a></li>
                <li><a href="../logout.php">Log out</a></li>
                <?php
            }else if($aux <= 5 && $aux >= 3){
                ?>
                <li><a href="../Perfil"><img src="./perfil.png" width="40"></a></li>
                <li><a href="./?city=CDMX">CDMX</a></li>
                <li><a href="./?city=GDL">GDL</a></li>
                <li><a href="./?city=MTY">MTY</a></li>
                <li><a href="./?city=CUN">CUN</a></li>
                <li><a href="./?city=SJD">SJD</a></li>
                <li><a href="./?city=QRO">QRO</a></li>
                <li><a href="../Buscar/"><img src="./Buscar.png" width="40"></a></li>
                <li><a href="../logout.php">Log out</a></li>
                <?php
            }else{
                header("Location:../Buscar/");
            }
            ?>
        </ul>
    </nav>
    </header>
    <section>
        <table class="main">
            <thead>
                <tr>
                    <td>Progreso</td>
                    <td>ID SQL</td>
                    <td>Zona</td>
                    <td>Fecha de carga</td>
                    <td>Hora de carga</td>
                    <td>Fecha de entrega</td>
                    <td>Hora de entrega</td>
                    <td>Dirección de entrega</td>
                    <td>Razón Social</td>
                    <td>Datos de contacto</td>
                    <td>SO</td>
                    <td>Factura</td>
                    <td>Número de piezas</td>
                    <td>Número de cajas</td>
                    <td>Número de tarimas</td>
                    <td>Tipo de trasporte</td>
                    <td>Placas</td>
                    <td>Operador</td>
                    <td>Maniobrista</td>
                    <td>Custodia</td>
                    <td>Pesion</td>
                    <td>Hora salida con Custodia</td>
                    <td>Observaciones</td>
                    <td>Evidencia</td>
                    <td>Terminado</td>
                    <?php 
                    $aux = $_SESSION['nivel'];
                    if($aux > 3){
                        ?>
                        <td><a href="../Nuevo/"><button type="button">Nuevo</button></a></td>
                        <td><a href="./Evidencias/?city=<?php echo $city ?>">Subir Evidencia</a></td>
                    <?php
                    }
                    ?>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </thead>
            <?php
        function validation($var){
            return !empty($var);
        }
        $sql = "SELECT * FROM $city ORDER BY ID_SQL DESC LIMIT $rowN";
        $ans = mysqli_query($con,$sql);
        while($show = mysqli_fetch_array($ans)){
            $total = 0;
            if(validation($show['ID_SQL'])){
                $total = $total + 4.5;
            }
            if(validation($show['Zona'])){
                $total = $total + 4.5;
            }
            if(validation($show['FechaC'])){
                $total = $total + 4.5;
            }
            if(validation($show['HoraC'])){
                $total = $total + 4.5;
            }
            if(validation($show['FechaE'])){
                $total = $total + 4.5;
            }
            if(validation($show['HoraE'])){
                $total = $total + 4.5;
            }
            if(validation($show['DireccionE'])){
                $total = $total + 4.5;
            }
            if(validation($show['RazonS'])){
                $total = $total + 4.5;
            }
            if(validation($show['DatosC'])){
                $total = $total + 4.5;
            }
            if(validation($show['SO'])){
                $total = $total + 4.5;
            }
            if(validation($show['Factura'])){
                $total = $total + 4.5;
            }
            if(validation($show['NumeroP'])){
                $total = $total + 4.5;
            }
            if(validation($show['NumeroC'])){
                $total = $total + 4.5;
            }
            if(validation($show['NumeroT'])){
                $total = $total + 4.5;
            }
            if(validation($show['TipoT'])){
                $total = $total + 4.5;
            }
            if(validation($show['Placas'])){
                $total = $total + 4.5;
            }
            if(validation($show['Operador'])){
                $total = $total + 4.5;
            }
            if(validation($show['Maniobrista'])){
                $total = $total + 4.5;
            }
            if(validation($show['Custodia'])){
                $total = $total + 4.5;
            }
            if(validation($show['HoraSCC'])){
                $total = $total + 4.5;
            }
            if(validation($show['Observaciones'])){
                $total = $total + 4.5;
            }
            if($show['Terminado'] > 0){
                $total = $total + 5.5;
            }
            $color = "red";
            if ( $total < 80 ){
                $color = "red";
            } elseif ($total < 99){
                $color = "yellow";
            } elseif ($total == 100){
                $color = "green";
            }
        ?>
    <form id="<?php echo $show['ID_SQL'] ?>tr">
    <tr class="<?php echo $color ?>">
            <td><?php echo $total ?>%</td>
            <td><?php echo $show['ID_SQL'] ?></td>
            <td><input type="text" name="Zona" value="<?php echo $show['Zona']?>"></td>
            <td><input type="date" name="FechaC" value="<?php echo $show['FechaC']?>"></td>
            <td><input type="time" name="HoraC" value="<?php echo $show['HoraC']?>"></td>
            <td><input type="date" name="FechaE" value="<?php echo $show['FechaE']?>"></td>
            <td><input type="time" name="HoraE" value="<?php echo $show['HoraE']?>"></td>
            <td><input type="text" name="DireccionE" value="<?php echo $show['DireccionE']?>"></td>
            <td><input type="text" name="RazonS" value="<?php echo $show['RazonS']?>"></td>
            <td><input type="text" name="DatosC" value="<?php echo $show['DatosC']?>"></td>
            <td><input type="text" name="SO" value="<?php echo $show['SO']?>"></td>
            <td><input type="text" name="Factura" value="<?php echo $show['Factura']?>"></td>
            <td><input type="number" name="NumeroP" value="<?php echo $show['NumeroP']?>"></td>
            <td><input type="number" name="NumeroC" value="<?php echo $show['NumeroC']?>"></td>
            <td><input type="number" name="NumeroT" value="<?php echo $show['NumeroT']?>"></td>
            <td><input type="text" name="TipoT" value="<?php echo $show['TipoT']?>"></td>
            <td><input type="text" name="Placas" value="<?php echo $show['Placas']?>"></td>
            <td><input type="text" name="Operador" value="<?php echo $show['Operador']?>"></td>
            <td><input type="text" name="Maniobrista" value="<?php echo $show['Maniobrista']?>"></td>
            <td><input type="text" name="Custodia" value="<?php echo $show['Custodia']?>"></td>
            <td><input type="text" name="Pension" value="<?php echo $show['Pension']?>"></td>
            <td><input type="time" name="HoraSCC" value="<?php echo $show['HoraSCC']?>"></td>
            <td><input type="text" name="Observaciones" value="<?php echo $show['Observaciones']?>"></td>
            <input type="hidden" name="ID_SQL" value="<?php echo $show['ID_SQL'] ?>">
            <td><a href="./Evidencias/<?php echo $city ?>/<?php echo $show['Factura'] ?>.pdf"><img src="./link.png"  width="30"></a></td>
            <td><?php echo $show['Terminado'] ?></td>
            <?php
            $aux = $_SESSION['nivel'];
            if($aux >= 3){ 
            ?>
            </form>
             <td><button type="button" onclick="updateP('<?php echo $show['ID_SQL'] ?>tr')">Guardar</button></td>
             <td><button type="button" onclick="deleteP(<?php echo $show['ID_SQL'] ?>)">Eliminar</button> <form id="<?php echo $show['ID_SQL'] ?>">
             <input type="hidden" name="id" value="<?php echo $show['ID_SQL']?>">
             <input type="hidden" name="city" value="<?php echo $city ?>">
             </form> </td>
             <td><button type="button" onclick="finishP('<?php echo $show['ID_SQL'] ?>T')">Terminar</button><form id="<?php  echo $show['ID_SQL']?>T">
             <input type="hidden" name="id" value="<?php echo $show['ID_SQL']?>">
             <input type="hidden" name="city" value="<?php echo $city ?>">
             <input type="hidden" name="total" value="<?php echo $total?>">
             </form></td>
            <?php
            }else{
                continue;
            }
            ?>  
            <td>
    </tr>
        <?php }?>
        </table>
    </section>
</body>
<script src="tables.js"></script>
</html>