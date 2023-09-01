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
const OTROSERVIDOR = 'https://amazon.com';
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
    echo "<br> El resultado es" . (2+$numero)."<br>";
    //resultados en booleano segun valor

    if ($usuario=="Irina") {
        echo "El nombre es Irina, Es verdadero";
    }else{
        echo "El nombre no es Irina, Es falso<br>";
    }

    $numero=33;
    if ($numero){
        echo $numero . ' => True <br>'; // la condición es verdadera
            }else {
        echo $numero . ' => False <br>'; // la condición es falsa
    }
    //declaracion o conversion de datos
    echo (float) (0.2545+ 5975)*10;
    $otroValor=(int) 5;
    echo "<br>".$otroValor . "<br>";

    # Matriz
    $matrizDeNumeros[]=array();
    for ($i=0;$i<10;$i++){
        $matrizDeNumeros[$i]=$i*10;
    }
    #print_r - Imprime información legible para humanos sobre una variable
print_r($matrizDeNumeros);


    $matrizEjemplo[]=array();
    for($i=0;$i<30;$i++) {
        if ($i < 15) {
            $matrizEjemplo[$i] = "a";
        } else {
            $matrizEjemplo[$i] = "b";
        }
    }
    $matrizEjemplo1[]=array();
             for ($i=0;$i<27;$i++){
                 $matrizEjemplo1[$i]=$abe[$i];

             }

    print_r($matrizEjemplo1)
    ?>

    /* Ejercicio utilizanco For
    *****************************
    * Crea las tablas de multiplicar desde el 1 al 10
    *
    */

    <?php


    echo "<hr>";
    echo "<h1>Tablas de multiplicar</h1>";
        for ($i=0;$i<=10;$i++){
            for ($u=0;$u<=10;$u++){
                echo "$i x $u = ". $i*$u. "<br>";
            }
            echo "<br>";
    }
  
    ?>


</body>
</html>