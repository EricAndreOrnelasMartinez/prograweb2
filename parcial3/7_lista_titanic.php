<?php
require('fpdf.php');
require('conexion.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT name FROM registro WHERE survived=1 ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'Lista de sobrevivientes del titanic',0,1);
//output data of each row (los echos se pelean con la memoria del navegador)
//echo "Materias Pendientes<br>";
//echo "<ol>";
$sig = 0;

while($row = $result->fetch_assoc()){
//secho "<li>".$row["materia"]."</li>";
$pdf->Cell(0,10,$sig."-".$row["name"],0,1);
$sig++;
}
//echo "</ol>"; 
$pdf->Output();
}else{
echo "0 results";
}
?>