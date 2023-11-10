<?php
session_start();
$mensajes= array();
//Ejercicio: Envia varias cadenas a la pagina del index y muestralo como lista.

//La idea es validar dia, mes, año... y mostrar mensajes que se acumulen en un array.//
/**/
if ($_GET["dia"]>=1 && $_GET["dia"]<=31)
    $dia=$_GET["dia"];
else$msn=array_push($mensajes,"El dia no puede estar vacio");
/**/
if ($_GET["mes"]>=1 && $_GET["mes"]<=12)
    $mes=$_GET["mes"];
else
    $msn=array_push($mensajes, "El mes no puede estar vacio");
/**/
if ($_GET["anio"]>=1950 && $_GET["anio"]<=2023)
    $anio=$_GET["anio"];
else
    $msn=array_push($mensajes, "El mes no puede estar vacio");

//var dump($mensajes);
if (count($mensajes)>=1) {
    $_SESSION["mensaje"] = $mensajes;
    header("Location:http://localhost:63342/Mis%20proyectos/Actividades/Repaso/index.php");
}else{
    $msn=array_push($mensajes,"Tu cumple es el $dia- $mes - $anio");
    $_SESSION["mensaje"]=$mensajes;
    header("Location:http://localhost:63342/Mis%20proyectos/Actividades/Repaso/index.php?");
}

