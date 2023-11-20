<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body>
    
    <div class="body">

        <form action="inicio.php" method="post">
            <label for="Elija una opción"></label>
            <select name="opcion" id="1">
                <option value="1">LOGIN</option>
                <option value="2">REGISTRARSE</option>
            </select>
            <input type="submit" value="IR">
        </form>

    </div>

    <script>
        var opcion;
        var opcion = document.getElementById("1").value;
    </script>

    
    <?php

        if(isset($_POST["opcion"])){

            $opcion = $_POST["opcion"];

            if($opcion == 1)
                header("Location: http://localhost/Portafolio/Proyecto/login.html");
            else
                header("Location: http://localhost/Portafolio/Proyecto/registro.html");

        }

    ?>
</body>
</html>