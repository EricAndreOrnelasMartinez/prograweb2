<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./cssforcitis.css">
    <title>Estres Laboral</title>
</head>
<body>
    <h1>Estres laboral</h1>
    <h3>Contesta el siguiente formulario</h3>
    <form id="info">
        <label for="name">Nombre</label>
        <input type="text" required name="name">
        <label for="email">Correo</label>
        <input type="text" required name="email">
        <label for="p1">Imposibilidad de conciliar el sueño.</label>
        <select name="p1">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p2">Jaquecas y dolores de cabeza.</label>
        <select name="p2">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p3">Indigestiones o molestias gastrointestinales</label>
        <select name="p3">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p4">Sensación de cansancio extremo o agotamiento.</label>
        <select name="p4">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p5">Tendencia de comer, beber o fumar más de lo habitual.</label>
        <select name="p5">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p6">Disminución del interés sexual. </label>
        <select name="p6">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p7">Disminución del apetito.</label>
        <select name="p7">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p8">Temblores musculares (por ejemplo tics nerviosos oparpadeos).</label>
        <select name="p8">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p9">Pinchazos o sensaciones dolorosas en distintas partes del cuerpo. </label>
        <select name="p9">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p10">Tentaciones fuertes de no levantarse por la mañana. </label>
        <select name="p10">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p11">Tendencias a sudar o palpitaciones.</label>
        <select name="p11">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <label for="p12">Imposibilidad de conciliar el sueño.</label>
        <select name="p12">
            <option value="1">Nunca</option>
            <option value="2">Casi nunca</option>
            <option value="3">Pocas veces</option>
            <option value="4">Algunas veces</option>
            <option value="5">Relativamente frecuente</option>
            <option value="6">Muy frecuente</option>
        </select>
        <input type="submit" value="Evaluar">
        <h3 id="aux"></h3>
    </form>
    <button type="button" id="con">Consulatr resultados</button>
    <table id="table" class="main"></table>
    <script src="./app.js"></script>
</body>
</html>