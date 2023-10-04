<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table style='border: 1px solid black'>
        <?php
            $tabla = 5;
            for($i = 1; $i <= 10; $i++){
                echo "<tr>";
                echo "<td>".$tabla."</td>";
                echo "<td>X</td>";
                echo "<td>".$i."</td>";
                echo "<td>".($tabla * $i)."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
<?php
/*
    $tabla = 5; 

    for($i = 1; $i <= 10; $i++){
        echo "5 x ".$i." = ".$tabla*$i."<br>";
    }*/

?>