<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica</title>
</head>
<body>
    <?php
    session_start();
    echo $_SESSION["favcolor"];
    echo "<br>";
    echo $_SESSION["favanimal"];
    ?>
</body>
</html>