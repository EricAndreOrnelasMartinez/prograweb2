<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr;
    ?>
    <table border=1>
        <th>P</th>
        <th>V</th>
        <?php
            for($i = 0; $i < 20; $i++){
                echo "<tr>";
                $arr[$i] = rand(1, 100);
                echo "<td>".$i."</td>";
                echo "<td>".$arr[$i]."</td>";
                echo "</tr>";
            }
        ?>
    </table><br><br>
    <table border=1>
        <th>P</th>
        <th>V</th>
        <?php
            for($i = 19; $i >= 0; $i--){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[$i]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>