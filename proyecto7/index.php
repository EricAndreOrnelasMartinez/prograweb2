<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $aux = $_GET['aux'];
    if(isset($aux)){
        $num = rand(0, 6);
    }else{
        $num = 0;
    }
    ?>
    <img src="./img/<?php echo $num?>.svg" alt="img">
    <br><button type="button" id="jugar">Jugar</button>
    <script>
        const b1 = document.getElementById("jugar")
        b1.addEventListener('click', e=>{
            e.preventDefault()
            window.location.assign("./index.php?aux=1")
        })
    </script>
</body>
</html>