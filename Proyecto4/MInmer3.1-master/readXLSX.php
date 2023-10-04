<?php 
error_reporting(E_ALL);
ini_set('display_errors','1');
require 'Classes/PHPExcel/IOFactory.php';
$terminadoI = false;
function hasAA($string){
    $prove = false;//explode
    $arr = explode(" ",$string);
    foreach($arr as $indexL){
        if($indexL === "a" || $indexL === "A"){
            $prove = true;
            break;
        }
    }
    return $prove;
}
function readAndCDMX($fileU){
$con = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
$fileName = __DIR__."/uploads/".$fileU;
$obReader = PHPExcel_IOFactory::load($fileName);
$obReader->setActiveSheetIndex(0);
$isfished = false;
$nRows = $obReader->setActiveSheetIndex(0)->getHighestRow();
for($i = 2; $i <= $nRows; $i++){
    $HorarioT = "error";
    $FechaCP = $obReader->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
    $FechaC = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaCP)); 
    $FechaEP = $obReader->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
    $FechaE = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaEP)); 
    $Operador = $obReader->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
    $Placas = $obReader->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
    $ID = $obReader->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
    $SO = $obReader->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
    $Factura = $obReader->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
    $Cliente = $obReader->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
    $PZS = $obReader->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
    $Cajas = round($obReader->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
    $Subtotal = $obReader->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
    $Horario = $obReader->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
    if(!empty($Horario)){
        if(!hasAA($Horario)){
            $HorarioT = $Horario * 24;
        }else {
            $HorarioT = $Horario;
        }
    }else{
        $HorarioT = "PENDIENTE";
    }
    $Direccion = $obReader->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
    $Destino = $obReader->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
    $Concepto = $obReader->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
    $Capacidad = $obReader->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
    $Observaciones = $obReader->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
    $OE = $obReader->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
    $Custodia = $obReader->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
    $sql = "INSERT INTO CDMX(FechaC,FechaE,Operador,Placas,ID,SO,Factura,Cliente,PZS,Caja,Subtotal,Horario,Direccion,Destino,Concepto,Capacidad,Observaciones,OE,Custodia,Terminado) VALUES('$FechaC','$FechaE','$Operador','$Placas','$ID','$SO','$Factura','$Cliente','$PZS','$Cajas','$Subtotal','$HorarioT','$Direccion','$Destino','$Concepto','$Capacidad','$Observaciones','$OE','$Custodia',false);";
    $rmysql = mysqli_query($con, $sql);
    if($i == $nRows){
        $isfished = true;
    }
    if($rmysql){
       // echo "capturado!!";
    }else{
        //echo "algo falló";
    }
    if($isfished){
    readAndGDL($fileU);
    $con->close();
    }
}
}

function readAndGDL($fileU){
    $con1 = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
    $fileName1 = __DIR__."/uploads/".$fileU;
    $obReader1 = PHPExcel_IOFactory::load($fileName1); 
    $obReader1->setActiveSheetIndex(1);
    $nRows1 = $obReader1->setActiveSheetIndex(1)->getHighestRow();
    $isfished1 = false;
    $HorarioT1 = "Error";
    for($i = 2; $i <= $nRows1; $i++){
        $FechaCP = $obReader1->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $FechaC1 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaCP)); 
        $FechaEP = $obReader1->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $FechaE1 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaEP)); 
        $Operador1 = $obReader1->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $Placas1 = $obReader1->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $ID1 = $obReader1->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $SO1 = $obReader1->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $Factura1 = $obReader1->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $Cliente1 = $obReader1->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $PZS1 = $obReader1->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $Cajas1 = round($obReader1->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
        $Subtotal1 = $obReader1->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $Horario1 = $obReader1->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        if(!empty($Horario1)){
            if(!hasAA($Horario1 )){
                $HorarioT1 = $Horario1 * 24;
            }else {
                $HorarioT1 = $Horario1;
            }
        }else{
            $HorarioT1 = "PENDIENTE";
        }
        $Direccion1 = $obReader1->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $Destino1 = $obReader1->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $Concepto1 = $obReader1->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $Capacidad1 = $obReader1->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $Observaciones1 = $obReader1->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $OE1 = $obReader1->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $Custodia1 = $obReader1->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $sql1 = "INSERT INTO GDL(FechaC,FechaE,Operador,Placas,ID,SO,Factura,Cliente,PZS,Caja,Subtotal,Horario,Direccion,Destino,Concepto,Capacidad,Observaciones,OE,Custodia,Terminado) VALUES('$FechaC1','$FechaE1','$Operador1','$Placas1','$ID1','$SO1','$Factura1','$Cliente1','$PZS1','$Cajas1','$Subtotal1','$HorarioT1','$Direccion1','$Destino1','$Concepto1','$Capacidad1','$Observaciones1','$OE1','$Custodia1',false);";
        $rmysql1 = mysqli_query($con1, $sql1);
        if($rmysql1){
           // echo "capturado!!";
        }else{
           // echo "algo falló";
        }
        if($i == $nRows1){
            $isfished1 = true;
        }
    }
    if($isfished1){
        readAndMTY($fileU);
        $con1->close();
    }
}

function readAndMTY($fileU){
    $con2 = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
    $fileName2 = __DIR__."/uploads/".$fileU;
    $obReader2 = PHPExcel_IOFactory::load($fileName2); 
    $obReader2->setActiveSheetIndex(2);
    $nRows2 = $obReader2->setActiveSheetIndex(2)->getHighestRow();
    $isfished2 = false;
    $HorarioT2 = "Error";
    for($i = 2; $i <= $nRows2; $i++){
        $FechaCP = $obReader2->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $FechaC2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaCP)); 
        $FechaEP = $obReader2->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $FechaE2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaEP)); 
        $Operador2 = $obReader2->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $Placas2 = $obReader2->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $ID2 = $obReader2->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $SO2 = $obReader2->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $Factura2 = $obReader2->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $Cliente2 = $obReader2->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $PZS2 = $obReader2->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $Cajas2 = round($obReader2->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
        $Subtotal2 = $obReader2->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $Horario2 = $obReader2->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        if(!empty($Horario2)){
            if(!hasAA($Horario2)){
                $HorarioT2 = $Horario2 * 24;
            }else {
                $HorarioT2 = $Horario2;
            }
            }else{
            $HorarioT2 = "PENDIENTE";
            }
        $Direccion2 = $obReader2->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $Destino2 = $obReader2->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $Concepto2 = $obReader2->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $Capacidad2 = $obReader2->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $Observaciones2 = $obReader2->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $OE2 = $obReader2->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $Custodia2 = $obReader2->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $sql2 = "INSERT INTO MTY(FechaC,FechaE,Operador,Placas,ID,SO,Factura,Cliente,PZS,Caja,Subtotal,Horario,Direccion,Destino,Concepto,Capacidad,Observaciones,OE,Custodia,Terminado) VALUES('$FechaC2','$FechaE2','$Operador2','$Placas2','$ID2','$SO2','$Factura2','$Cliente2','$PZS2','$Cajas2','$Subtotal2','$HorarioT2','$Direccion2','$Destino2','$Concepto2','$Capacidad2','$Observaciones2','$OE2','$Custodia2',false);";
        $rmysql2 = mysqli_query($con2, $sql2) or die(mysqli_error($con2));
        if($rmysql2){
           // echo "capturado!! de mty ";
        }else{
           // echo "algo falló";
        }
        if($i === $nRows2){
            $isfished2 = true;
        }
        if($isfished2){
            readAndCUN($fileU);
            $con2->close();
        }
    }
    }

function readAndCUN($fileU){
    $con2 = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
    $fileName2 = __DIR__."/uploads/".$fileU;
    $obReader2 = PHPExcel_IOFactory::load($fileName2); 
    $obReader2->setActiveSheetIndex(3);
    $nRows2 = $obReader2->setActiveSheetIndex(3)->getHighestRow();
    $isfished2 = false;
    $HorarioT2 = "Error";
    for($i = 2; $i <= $nRows2; $i++){
        $FechaCP = $obReader2->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $FechaC2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaCP)); 
        $FechaEP = $obReader2->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $FechaE2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaEP)); 
        $Operador2 = $obReader2->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $Placas2 = $obReader2->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $ID2 = $obReader2->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $SO2 = $obReader2->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $Factura2 = $obReader2->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $Cliente2 = $obReader2->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $PZS2 = $obReader2->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $Cajas2 = round($obReader2->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
        $Subtotal2 = $obReader2->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $Horario2 = $obReader2->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        if(!empty($Horario2)){
            if(!hasAA($Horario2)){
                $HorarioT2 = $Horario2 * 24;
            }else {
                $HorarioT2 = $Horario2;
            }
            }else{
            $HorarioT2 = "PENDIENTE";
            }
        $Direccion2 = $obReader2->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $Destino2 = $obReader2->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $Concepto2 = $obReader2->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $Capacidad2 = $obReader2->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $Observaciones2 = $obReader2->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $OE2 = $obReader2->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $Custodia2 = $obReader2->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $sql2 = "INSERT INTO CUN(FechaC,FechaE,Operador,Placas,ID,SO,Factura,Cliente,PZS,Caja,Subtotal,Horario,Direccion,Destino,Concepto,Capacidad,Observaciones,OE,Custodia,Terminado) VALUES('$FechaC2','$FechaE2','$Operador2','$Placas2','$ID2','$SO2','$Factura2','$Cliente2','$PZS2','$Cajas2','$Subtotal2','$HorarioT2','$Direccion2','$Destino2','$Concepto2','$Capacidad2','$Observaciones2','$OE2','$Custodia2',false);";
        $rmysql2 = mysqli_query($con2, $sql2) or die(mysqli_error($con2));
        if($rmysql2){
          // echo "capturado!! de cun ";
        }else{
           // echo "algo falló";
        }
        if($i === $nRows2){
            $isfished2 = true;
        }
        if($isfished2){
            readAndSJD($fileU);
            $con2->close();
        }
    }
}
function readAndSJD($fileU){
    $con2 = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
    $fileName2 = __DIR__."/uploads/".$fileU;
    $obReader2 = PHPExcel_IOFactory::load($fileName2); 
    $obReader2->setActiveSheetIndex(4);
    $nRows2 = $obReader2->setActiveSheetIndex(4)->getHighestRow();
    $isfished2 = false;
    $HorarioT2 = "Error";
    for($i = 2; $i <= $nRows2; $i++){
        $FechaCP = $obReader2->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $FechaC2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaCP)); 
        $FechaEP = $obReader2->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $FechaE2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaEP));
        $Operador2 = $obReader2->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $Placas2 = $obReader2->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $ID2 = $obReader2->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $SO2 = $obReader2->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $Factura2 = $obReader2->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $Cliente2 = $obReader2->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $PZS2 = $obReader2->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $Cajas2 = round($obReader2->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
        $Subtotal2 = $obReader2->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $Horario2 = $obReader2->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        if(!empty($Horario2)){
            if(!hasAA($Horario2)){
                $HorarioT2 = $Horario2 * 24;
            }else {
                $HorarioT2 = $Horario2;
            }
            }else{
            $HorarioT2 = "PENDIENTE";
            }
        $Direccion2 = $obReader2->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $Destino2 = $obReader2->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $Concepto2 = $obReader2->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $Capacidad2 = $obReader2->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $Observaciones2 = $obReader2->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $OE2 = $obReader2->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $Custodia2 = $obReader2->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $sql2 = "INSERT INTO SJD(FechaC,FechaE,Operador,Placas,ID,SO,Factura,Cliente,PZS,Caja,Subtotal,Horario,Direccion,Destino,Concepto,Capacidad,Observaciones,OE,Custodia,Terminado) VALUES('$FechaC2','$FechaE2','$Operador2','$Placas2','$ID2','$SO2','$Factura2','$Cliente2','$PZS2','$Cajas2','$Subtotal2','$HorarioT2','$Direccion2','$Destino2','$Concepto2','$Capacidad2','$Observaciones2','$OE2','$Custodia2',false);";
        $rmysql2 = mysqli_query($con2, $sql2) or die(mysqli_error($con2));
        if($rmysql2){
           //echo "capturado!! de sjd ";
        }else{
            //echo "algo falló";
        }
        if($i === $nRows2){
            $isfished2 = true;
        }
        if($isfished2){
            readAndQRO($fileU);
            $con2->close();
        }
    }
}
function readAndQRO($fileU){
    $con2 = mysqli_connect("localhost","root","Lasric.2018","Minmer2");
    $fileName2 = __DIR__."/uploads/".$fileU;
    $obReader2 = PHPExcel_IOFactory::load($fileName2); 
    $obReader2->setActiveSheetIndex(5);
    $nRows2 = $obReader2->setActiveSheetIndex(5)->getHighestRow();
    $isfished2 = false;
    $HorarioT2 = "Error";
    for($i = 2; $i <= $nRows2; $i++){
        $FechaCP = $obReader2->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $FechaC2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaCP)); 
        $FechaEP = $obReader2->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $FechaE2 = date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($FechaEP));
        $Operador2 = $obReader2->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $Placas2 = $obReader2->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $ID2 = $obReader2->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $SO2 = $obReader2->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $Factura2 = $obReader2->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $Cliente2 = $obReader2->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $PZS2 = $obReader2->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $Cajas2 = round($obReader2->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
        $Subtotal2 = $obReader2->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $Horario2 = $obReader2->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        if(!empty($Horario2)){
            if(!hasAA($Horario2)){
                $HorarioT2 = $Horario2 * 24;
            }else {
                $HorarioT2 = $Horario2;
            }
            }else{
            $HorarioT2 = "PENDIENTE";
            }
        $Direccion2 = $obReader2->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $Destino2 = $obReader2->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $Concepto2 = $obReader2->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $Capacidad2 = $obReader2->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $Observaciones2 = $obReader2->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $OE2 = $obReader2->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $Custodia2 = $obReader2->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $sql2 = "INSERT INTO QRO(FechaC,FechaE,Operador,Placas,ID,SO,Factura,Cliente,PZS,Caja,Subtotal,Horario,Direccion,Destino,Concepto,Capacidad,Observaciones,OE,Custodia,Terminado) VALUES('$FechaC2','$FechaE2','$Operador2','$Placas2','$ID2','$SO2','$Factura2','$Cliente2','$PZS2','$Cajas2','$Subtotal2','$HorarioT2','$Direccion2','$Destino2','$Concepto2','$Capacidad2','$Observaciones2','$OE2','$Custodia2',false);";
        $rmysql2 = mysqli_query($con2, $sql2) or die(mysqli_error($con2));
        if($rmysql2){
           //echo "capturado!! de sjd ";
        }else{
            //echo "algo falló";
        }
        if($i === $nRows2){
            $isfished2 = true;
        }
        if($isfished2){
            $con2->close();
        }
    }
}



?>