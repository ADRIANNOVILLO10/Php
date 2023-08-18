<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "hola";
const SERVIDOR="https://google.es" ;
define('OTROSERVIDOR','https://amazon.com');
$usuario="juan";
echo "<p>El servidor que mas visito es" . SERVIDOR. "</p>";
echo "El usuario que utilizo es " , $usuario;
?>
<!--Código HTML -->
<h1>Muestra un texto</h1>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque consequatur cum dicta dignissimos doloremque eos facere, impedit, ipsam magni officiis quaerat, quibusdam vel. Adipisci animi in iusto molestiae rem.</p>
<?php
    #Otro código PHP
    echo "El otro Servidor es " . OTROSERVIDOR;
    $usuario=123456;
    echo "<p>Ahora mi usuario es " .($usuario + 1.05) . "</p>";
    echo 'He\'s a boy <br> ';
    echo "El dijo \"hola\"<br>";
    echo "El dijo 'hola'<br>";
    echo 'El dijo "Hola"<br>';
    echo "El usuario continua con el nombre de $usuario<br>";
    echo 'El usuario continua con el nombre de $usuario<br>';
    $fruta="manzana";
    echo "Una $fruta no cara<br>"; // una manzana no es cara
    echo "Diez kilos de {$fruta}s si serian caras<br>"; // ${fruta}s tambien es válido
    // si se quiere mostrar el nombre con llaves
    echo "\Diez kilos de {{$fruta}s} si serian caras <br>"; // ${fruta}s tambien es valido
    echo $fruta [2]. "<br>";
    $abe="ABCDEFGHIJKLMÑNOPQRSTUVWXYZ";
    echo  $abe[5]; //ojo ...las Ñ
    # podemos sumar una cadena con un int
    $numero='2';
    echo "<br> El resultado es" . (2+$numero);
?>

</body>
</html>