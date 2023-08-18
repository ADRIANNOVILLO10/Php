<?php

$nombre = 'Adrián Novillo Lucendo';
$fecha=date("d/m/Y");
$hora=date("H:i:s");
$precio=5;
$cantidad=10;
$_edad=15;
$Edad=25;
define("MINOMBRE", "ADRIAN NOVILLO");
const OTRONOMBRE= "DIEGO ZABALghLOS";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>Soy <?=$nombre;?></p>
    <p>Hoy es <?=$fecha;?></p>
    <p>Y son las <?=$hora;?></p>
    <p>El total es <?=$precio + $cantidad; ?> Euros</p>
<?php
echo "El nombre de la constante es=> ", MINOMBRE, "<br>" , "El nombre del otro alumno es => ", OTRONOMBRE;
?>


</body>
</html>