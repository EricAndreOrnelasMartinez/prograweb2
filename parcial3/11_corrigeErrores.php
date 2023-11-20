<html>
<head>
    <title></title>
</head>
<body>
<h1>Corrige y documenta Errores</h1>
    <h2>1. Errores corregidos (ejemploencriptar):</h2>
    <p>
         1. Se cambia el operador de (=) a (==) en los if <br>
         2. Se agrega ; al final de las sentencias de echo<br> 
        3. Se agregan " comillas faltantes en echo <br>
    </p>
    <h3>¿Qué hace el código?</h3>
     <p>
            Presenta diferentes tipos de algoritmos de encriptación, cada condición verifica si cierto<br>
	    algoritmo está disponible, y si lo está, muestra el resultado de la encriptación, si no, <br>
	    muestra que no está disponible.
	</p>  
    <h3>Código 1:</h3>
    <?php
    // ERRORES CORREGIDOS:
    // 1. Se cambia el operador de (=) a (==) en los if
    // 2. Se agrega ; al final de las sentencias de echo
    // 3. Se agregan " comillas faltantes en echo

    // 2 character salt
    if (CRYPT_STD_DES == 1) {
        echo "Standard DES: " . crypt('something', 'st') . "\n<br>";
    } else {
        echo "Standard DES not supported.\n<br>";
    }

    // 4 character salt
    if (CRYPT_EXT_DES == 1) {
        echo "Extended DES: " . crypt('something', '_S4..some') . "\n<br>";
    } else {
        echo "Extended DES not supported.\n<br>";
    }

    // 12 character salt starting with $1$
    // Se corrige el operador de asignación (=) a (==), se pone ; después de echo
    if (CRYPT_MD5 == 1) {
        echo "MD5: " . crypt('something', '$1$somethin$') . "\n<br>";
    } else {
        echo "MD5 not supported.\n<br>";
    }

    // Salt starting with $2a$. The two-digit cost parameter: 09. 22 characters
    // Se corrige el operador de asignación (=) a (==), se pone ; después de echo
    if (CRYPT_BLOWFISH == 1) {
        echo "Blowfish: " . crypt('something', '$2a$09$anexamplestringforsalt$') . "\n<br>";
    } else {
        echo "Blowfish DES not supported.\n<br>";
    }

    // 16 character salt starting with $5$. The default number of rounds is 5000.
    // Se corrige el operador de asignación (=) a (==), se pone ; después de echo
    if (CRYPT_SHA256 == 1) {
        echo "SHA-256: " . crypt('something', '$5$rounds=5000$anexamplestringforsalt$') . "\n<br>";
    } else {
        echo "SHA-256 not supported.\n<br>";
    }

    // 16 character salt starting with $6$. The default number of rounds is 5000.
    // Se corrige el operador de asignación (=) a (==), se pone ; después de echo
    if (CRYPT_SHA512 == 1) {
        echo "SHA-512: " . crypt('something', '$6$rounds=5000$anexamplestringforsalt$') . "\n<br>";
    } else {
        echo "SHA-512 not supported.\n";
    }
    ?>

    <br><br>
    <h2>2. Errores corregidos (ejemploencriptar3):</h2>
    <p>
         1. Se colocaron todos los ; faltantes en las sentencias donde lo ocupaba <br>
         2. Se cerró el bloque de la función encrypt<br> 
        3. Se agregó el { faltante en el bloque for de la función decrypt, y se añadió el $ faltante a los parámetros "string" y "key" <br>
	4. Se corrigió la concatenación de cadenas en las 2 últimas llamadas echo<br>
    </p>
    <h3>¿Qué hace el código?</h3>
     <p>
            Define 2 funciones, una encripta una cadena y la otra la desencripta, luego muetra la cadena original, <br>
	    la cadena encriptada, y la cadena desencriptada llamando a las funciones.
	</p>  
    <h3>Código 2:</h3>
<?php

// Función para encriptar una cadena utilizando un algoritmo simple
function encrypt($string, $key) {
    $result = '';

    // Recorre cada caracter de la cadena original
    for ($i = 0; $i < strlen($string); $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) + ord($keychar));
        $result .= $char;
    }

    // Retorna la cadena encriptada en formato base64
    return base64_encode($result);
}
// Función para desencriptar una cadena previamente encriptada
function decrypt($string, $key) {
    $result = '';

    // Decodifica la cadena encriptada desde base64
    $string = base64_decode($string);

    // Recorre cada caracter de la cadena encriptada
    for ($i = 0; $i < strlen($string); $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) - ord($keychar));
        $result .= $char;
    }

    // Retorna la cadena desencriptada
    return $result;
}

$cadena_encriptada = encrypt("programación web II", "algunaclave");
echo "Cadena original: " . "programación web II" . "<br>";
echo "Encriptada: " . $cadena_encriptada . "<br>";
$cadena_desencriptada = decrypt($cadena_encriptada, "algunaclave");
echo "Desencriptada: " . $cadena_desencriptada . "<br>";

?>
</body>
</html>