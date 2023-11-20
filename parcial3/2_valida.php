<?php
session_start();
?>

<?php
// Start the session
require("conexion.php");
$u = $_POST["user"];
$p = $_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
//echo $u." ".$p."<br>";
$sql = "SELECT * FROM usuarios WHERE user='".$u."' and pass='".$p."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    //echo $row["id"];
    $_SESSION["id"]=$row["id"];
    $_SESSION["u"]=$row["user"];
    $_SESSION["tipo"] = $row["tipo"]; 
    //ERROR
    //$SESSION["id"]->$row["id"];
    //$SESSION["u"]->$row["user"];
    //PRUEBA
    //$SESSION["id"]=1;
    //$SESSION["u"]="user";
    echo "<h1>Bienvenido </h1>";
    //echo "id: ".$_SESSION["id"]."<br>user: ".$_SESSION["u"]."<br>Tipo: ".$_SESSION["tipo"];
    echo "<br><a href=2_mostrar.php>Ingresar</a>";
   } else {
    echo "usuario o contraseña no valida";
   }
   $conn->close();
?>
</body>