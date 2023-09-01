<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividades</title>
</head>
<body>

<?php

echo "<hr>";
echo "<h1>En PHP muestra los números de dos en dos del 0 al 1000</h1>";
for ($i=0;$i<=1000;$i++){
    echo "$i  $ = ". $i. "<br>";
    $i++;
}

?>


<?php

echo "<hr>";
echo "<h1>En PHP muestra los números del 1000 al 0,</h1>";
for ($i=1000;$i>=0;$i--){
    echo "$i  $ = ". $i. "<br>";

}

?>



</body>
<script src="js/script.js"></script>
</html>