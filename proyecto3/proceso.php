<?php
    $tabla = $_POST['num'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <?php
            for($i = 1; $i <= 10; $i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>x</td>";
                echo "<td>".$tabla."</td>";
                echo "<td>".$tabla*$i."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>