<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="row">
    <div class="col-6">
    <h1>Manipular los números</h1>
    <p>Las funciones más útiles para manipular los números son las siguientes:</p>
    <h2>Valor absoluto de un número</h2>
        <?php
        /* funcion para enviar a imprimir con salto de linea*/
        function mostrar($cad){
            echo $cad. "<br>";
        }
        $numero=-365;
        //enviar el valor absoluto de -365
        mostrar( cad:"El valor absoluto de -365 es ".abs($numero));
        mostrar( cad: "El valor absoluto de 4587 es ". abs( num: 4587));
        ?>
        <h2> Redondeo de un número al entero superior.</h2>
        <?=mostrar( cad: "El numero 6434.56 redondeado al superior es ". ceil(  6434.56));
        ?>

        <h2> Redondeo de un número al entero inferior.</h2>
        <?=mostrar( cad: "El numero 6434.56 redondeado al superior es ". floor(  6434.56));
        ?>
        <h2>Cociente de la división entera de dos enteros.</h2>
        <?= mostrar(" 15 / 3 es ". intdiv( num1: 15, num2: 3));
        ?>
        <h2>Máximo y Mínimo de un conjunto de valores</h2>
        <php
        <?php
        $juan = 15;
        $pedro = 17;
        $maria = 19;
        mostrar("La mayor edad entre Juan, Pedro y María tiene " . max($juan, $pedro,$maria). " años");
        mostrar("La menor edad entre Juan, Pedro y María tiene " . min($juan, $pedro,$maria). " años");
        mostrar("Menor valor entre a g y es " . min("a", "g", "y"));
        mostrar("Mayor valor entre a g y es " . max("a", "g", "y"));
        ?>

        <h2>Números aleatorios: devuelve un número aleatorio entero entre el limite mínimo y el limite máximo.</h2>
        <?php
            //si no le indicamos ni el minimo ni maximo, nos da un numeor aleatorio cualquiera
            mostrar("Numero aleatorio sin delimitar min y max: " . rand());
            mostrar("Numero aleatorio desde el 1 a 100 es: " . rand(1,100));
            mostrar("Numero aleatorio desde 15 y 25 es: " . rand(15,25));
        ?>
        <h2>La función round: redondea un número.</h2>
        <?php
            $numero=17.32;
            mostrar(cad: "$numero redondeado con la funcion round() es " . round($numero));
                $numero=17.54;
            mostrar(cad: "$numero redondeado con la funcion round() es " . round($numero));

            /*
             * PHP_ROUND_HALF_UP (Valor por defecto): redondeado superior (2.5 da 3 en un redondeado al entero).
             * PHP_ROUND_HALF_DOWN: redondeo inferior (2.5 da 2 en un redondeado al entero).
             * PHP_ROUND_HALF_ODD: redondeo al número impar más próximo.
             * PHP_ROUND_HALF_EVEN: redondeo al número par más próximo.
             */
            $numero=2.5;
            mostrar ("Utilizando PHP_ROUND_HALF_UP de $numero el resultado es ".
                round($numero,0,1 ));
            mostrar ("Utilizando PHP_ROUND_HALF_DOWN de $numero el resultado es ".
            round($numero, precision: 0, mode: PHP_ROUND_HALF_UP));
            mostrar("Utilizando PHP_ROUND_HALF_EVEN de $numero el resultado es ". round($numero, 0,3));
            mostrar("Utilizando PHP_ROUND_HALF_ODD de $numero el resultado es ". round($numero, 0,4));


            // es mas facil utilizar ceil y floor

        ?>
            <hr>
        <h1> Manipular cadenas</h1>
        <h2>Las funciones más útiles para la manipulación de cadenas de caracteres son las siguientes:</h2>
        <h2>Conocer la longitud de una cadena strlen (stringlenght)</h2>
        <?php
            $cadena="En un lugar de la Mancha, donde...";
            mostrar("$cadena tiene ".strlen($cadena)."caracteres");
        ?>
        <h2>Convertir una cadena en minúscula</h2>
        <?=mostrar(strtolower($cadena));
           mostrar(strtoupper($cadena));
           $cadena=strtoupper($cadena);
           ?>
        <h2>Poner la primera letra en mayúscula</h2>
        <?=
            mostrar(ucfirst(strtolower($cadena)));

        ?>
        <h2>Poner cada palabra de la cadena en mayúscula</h2>
        <?=
            mostrar(ucwords(strtolower($cadena)));
           ?>
        <h2>Poner la primera letra de la cadena en minúscula</h2>
        <?=
            mostrar(lcfirst($cadena));
            ?>

        <h2>Comparar dos cadenas teniendo en cuenta o no las mayúsculas y minúsculas. </h2>
        <?=
            $otraCadena="En un lugar de la Mancha, donde....";
            // comparar las dos cadenas-> strcmp - compara may y min -> si no son iguales da un numero negativo
            mostrar("las dos cadenas son iguales (-no +si)". strcmp($cadena,$otraCadena));
            // comparar con strcasecmp si da 0 es porque son iguales pero no toma en cuenta las mayusculas o minusculas
            mostrar("las dos cadenas son iguales (-no +si) ". strcasecmp($cadena,$otraCadena));
            // comparar con un if y decir si son iguales o no
            // cada caracter tiene un calor
        $otraCadena=strtoupper($otraCadena);
        if(strcmp($cadena,$otraCadena)!=0){
            mostrar("Las cadenas no son iguales, o podrian ser iguales pero difieren en mayúscula y minúscula");

        }else{
            mostrar("Las cadenas son iguales");
        }
        /*
         * strcmp es sensible a las mayusculas y minusculas, mientras que strcasecmp no lo es.
         * .
         */
        ?>
    <h2>Dar formato a una salida de números</h2>
        <?php
        $numero=13254.853;
        mostrar("number_format()->".number_format($numero));
        mostrar("number_format($numero,1)-> muestra un decimal ->".number_format($numero,1));
        mostrar("number_format($numero,4,',','.')->muestra dos decimales y punto en miles, coma en decimales -> ".number_format($numero, 2,",", "."));
        ?>
        <h2> Dar formato a una cadena</h2>
        <?php
        /*
         * sprint devuelve el resultado en forma, mientras que printf muestra directamente el resultado (como la instrucción echo) y devuelve la longitud de la cadena con formato.
         * Importante!: Siempre las cadenas de formato comienzan con el % seguido de 5 o menos informaciones.
         */
        // d-> digito f-> float c-> caracter
        // longitud de como se quiere que se muestre
        $numero=23;
        mostrar("El $numero con un nuevo formato de ceros delante es ". sprintf("%05d",$numero));
        $numero=23.57893;
        mostrar("El $numero con un nuevo formato de ceros delante es ". sprintf("%.2f",$numero));
        mostrar("El $numero con un nuevo formato de ceros delante es ". sprintf("%.f",$numero));
        $numero=sprintf("%f",$numero); // sprintf puede asignar a una variable el formato que le indiques!
        mostrar("Ahora \$numero es ->".$numero);
        $dia=12;
        $mes=11;
        $anio=2023;
        mostrar("La fecha es : ". sprintf("%02d/%02d/%04d",$dia,$mes,$anio));
    ?>
        <form method="get" action="index.php">
            <input type="date" name="fecha">
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
        if(isset($_GET["enviar"])){
            $fecha=$_GET["fecha"];
            mostrar($fecha);
        }
        //unset($variable) -> destruye la variable!
    // concretar
    $cadena=sprintf("",$cadena);// genera y asigna el formato a $cadena
    printf("",$cadena); // muestra directamente el formato sin pasar por echo
    ?>
        <h2>Estas funciones permiten eliminar los caracteres "blancos"</h2>
        <?php
        //eliminar espacios en blanco del principio y final de una cadena
        $cadena="      Es un ejemplo ";
        mostrar("La cadena tiene".strlen($cadena)." digitos");
        mostrar("La cadena tiene".strlen(trim($cadena)). " digitos");
        mostrar(trim($cadena));

    ?>
        <h2>Reemplazar una cadena en otra ->str_replace(cadena1, cadena2, texto)</h2>
        <?php
         $cadena1=array("a","e","i","o","A","E","I","O",);
         $texto=" HOLA GRUPO, SOY VANESA.";
         $cadena2=array("4","3","1","0","4","3","1","0",);
         mostrar(str_replace($cadena1,$cadena2,$texto));
         // ¿Para que es util esto?
        // con el algoritmo anterior, crea una contraseña segura
        $texto="TortillaCebolla";
        mostrar(str_replace($cadena1,$cadena2,$texto)."$");
        $cadena1=array('a','b','c','d','e','f','g','h','i','j','k','l','ñ','m','n','o','p','q','r','s','t','u','v','w','x','y','z','  ');
        $cadena2=array('1','5','.',':','!','9','·','$','%','🏞️','🏁','&','/','(','=','6','7','2','-','+','❤️','😒','8','7','4','3','🤣️','__');
        $texto="esto es una prueba de cifrado inventado";


        mostrar(str_replace($cadena1,$cadena2,$texto));
        mostrar("Ahora el descifrado");
        $resultado=str_replace($cadena1,$cadena2,$texto); // asignando a la variable resultado la cadena cifrada
        mostrar(str_replace($cadena2,$cadena1,$resultado));//mostrando la cadena descifrada

    ?>
        <h2>Calcula el hash md5 de un string.</h2>
        <p> hash es utilizado para contraseñas, por ejemplo: Wordpress.</p>
    <?php
            $password="Desarrollo";
            $newPass=md5($password);
            mostrar("La contraseña $password en MD5 es ". $newPass);
            // la siguiente línea sustituye las 3 anteriores
        mostrar ("La contraseña 'Desarrollo' en MD% es" . md5('Desarrollo'));
    ?>
    <h2> Convierte en array la cadena mediante el delimitador-> explode(separador, $cadena</h2>
        <?php
        $cadenaTexto="es una prueba de una cadena con espacios";
        $arrayTexto=explode(" ",$cadenaTexto);
        var_dump($arrayTexto);

        /*
        Práctica:

        1.Con el siguiente texto:
        Frase de Gandhi sobre la forma de vivir
        "Vive como si fueras a morir manana. Aprende como si fueras a vivir siempre".
        ---------------------------------------------------------------------------
        a) Muestra la primera línea todo en mayúscula, la segunda la primera letra en mayuscula y resto en minuscula.
        b) Muestra toda la frase en minuscula
        c) Dime cuantos caracteres tiene cada frase
        d) Reemplaza las letras según el primer algoritmo realizado a->4 e-3...
        e) Calcula el md5 del titulo
        f) Transforma ls frases en arrays
        */

    ?>
     <hr>
        <h2>Ejercicio: FRASE DE GANDHI </h2>
        <h1>-d)</h1>
        <?php
         $cadena1=array("a","e","i","o","A","E","I","O",);
         $texto=" Vive como si fueras a morir manana. Aprende como si fueras a vivir siempre.";
         $cadena2=array("4","3","1","0","4","3","1","0",);
         mostrar(str_replace($cadena1,$cadena2,$texto));
         ?>

        <?php
        $cadena="Vive como si fueras a morir manana. Aprende como si fueras a vivir siempre.";
        mostrar("$cadena tiene ".strlen($cadena)."caracteres");
        ?>
        <h1>-b)</h1>
        <?=mostrar(strtolower($cadena));
        mostrar(strtoupper($cadena));
        $cadena=strtoupper($cadena);
        ?>

        <h2>-A)</h2>
        <?=
        mostrar(lcfirst($cadena));
        ?>

        <h2>CONTAR"</h2>
        <?php
        //eliminar espacios en blanco del principio y final de una cadena
        $cadena1="Vive como si fueras a morir manana. ";
        $cadena2="Aprende como si fueras a vivir siempre.";
        mostrar("La cadena tiene".strlen($cadena1)." digitos");
        mostrar("La cadena tiene".strlen(trim($cadena2)). " digitos");
        mostrar(trim($cadena));



    // otro ejemplo de dividir una cadena según un delimitador
        $email="irime@hotmail.com";
        $arrayEmail=explode("@",$email);
        var_dump($arrayEmail);
        mostrar("");
        mostrar("El nombre en el email es" . $arrayEmail[0]);
        mostrar("El dominio en el email es") . $arrayEmail[1];
        $frase="Frase de Gandhi sobre la forma de vivir. Vive como si fueras a morir mañana. Aprende como si fueras a vivir siempre";
        $arrayFrase=explode(".",$frase);
        mostrar(strtoupper($arrayFrase[0]));
        mostrar(strtolower($arrayFrase[1]));
        mostrar("La frase 1 tiene". strlen($arrayFrase[0])." caracteres");
        mostrar("La frase 2 tiene". strlen($arrayFrase[1])." caracteres");
        mostrar (md5($arrayFrase[0]));
        $cadena1=array("a", "e","i","o","A","E","I","O","m","M",);
        $cadena2=array("4", "3","1","0","4","3","1","0","?","?",);
        mostrar(str_replace($cadena1,$cadena2,$frase));

        ?>
        <h2>Comienza por str_starts_with</h2>
        <?php
            if (str_starts_with($frase, "F")){
                mostrar("La cadena comienda por F");
            }else{
                //substr-> extrae una subcadena de una cadena...
                mostrar("La cadena comienza por ". substr($frase,0,1));

            }

        ?>
        <h2>Termina por str_end_with</h2>
        <?php
            if (str_ends_with($frase,"e")){
                mostrar("La frase termina con una e");
            }else{
                mostrar("La frase termina por ". substr($frase, strlen($frase)-1,1));
            }

            //Ejercicio:

            //Crea un array de al menos 10 nombres que comiencen a, b, c y luego muestra solo los que comiencen con b.
        ?>
        <?php
        $nombre="Adrián,Alicia,Ataulfo,Alfonso,Alberto,Bárbara,Barón,Belinda,Balenciaga,Carmen,Camilo,Carlos";

        $arrayNombre=explode(",",$nombre);
        var_dump($arrayNombre);

        foreach ($arrayNombre as $item){
            if (str_starts_with($item,"C")){
                mostrar($item);
            }
        }
        ?>
        <h2> Extraer una cadena en una subcadena</h2>
        <?php
            $cadena="Hola, como te llamas?";
            mostrar($cadena);
            mostrar(substr($cadena,0,4));
            mostrar(substr($cadena,6,)); // sino indico la longitud, trae desde el indice el resto de la cadena.
        ?>
        <h2>Repetir una cadena un determinado número de veces-> str_repeat</h2>
        <?php
            mostrar(str_repeat("Hola-",10));
        ?>

    </div>
</div>
</body>
</html>