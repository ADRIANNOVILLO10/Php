<?php
if (!empty($_GET["mes"]))
    $mes=$_GET["mes"];
else
    header("http://localhost:63342/Mis%20proyectos/Actividades/Repaso/index.php?mensaje=El mes no es valido");
//un for sin llaves
//ejercicio: crea un bucle for sin llaves que muestre desde 1 hasta 12 que representan los meses del año.

//for ($i=1;$i<13;$i++){
//    echo "<br>" .$i;
//}



// realizamos un switch case, donde dependiendo el mes, imprimirmos su numero.
$i= $_GET["mes"];
switch ($mes){

    case "1": {echo " <br> <b> Enero </b> "; break;}
    case "2": {echo " <br> <b> Febrero </b> "; break;}
    case "3": {echo " <br> <b> Marzo </b> "; break;}
    case "4": {echo " <br> <b> Abril </b> "; break;}
    case "5": {echo " <br> <b> Mayo </b> "; break;}
    case "6": {echo " <br> <b> Junio </b> "; break;}
    case "7": {echo " <br> <b> Julio </b> "; break;}
    case "8": {echo " <br> <b> Agosto </b> "; break;}
    case "9": {echo " <br> <b> Septiembre </b> "; break;}
    case "10": {echo " <br> <b> Octubre </b> "; break;}
    case "11": {echo " <br> <b> Noviembre </b> "; break;}
    case "12": {echo " <br> <b> Diciembre </b> "; break;}

}


// realiza una captura de datos en el index, preguntando el mes a seleccionar...


/** Mostrar segun el mes leido, el nombre del mes... con un mensaje...
 * Tu cumpleaños es en */

// Realiza por while un bucle que lea del 1 al 10 y cuando llegue al 10 envie un mensaje.


// Hacemos un while con una condición booleana.


// Mostramos una pagina solicitando el nombre, hasta que no sea Juan, no dejará de mostrarlo.

$nombre=$_GET["nombre"];
$flag=false;
while(!$flag){
    if($nombre=="Juan") {
        echo " Y es el nombre esperado";
        $flag=true;
    }
    else{
        header("Location:http://localhost:63342/Mis%20proyectos/Actividades/Repaso/index.php?mensaje=El nombre no es valido");
        $flag=true;
    }
}

//echo "es una prueba de como funciona el include y el required";

