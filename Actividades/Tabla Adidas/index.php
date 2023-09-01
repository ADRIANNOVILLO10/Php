<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <br>
 <h1 class="text"><b> - Listado de precios productos Adidas -</h1>

    <br>
    <hr>
    <img src="img/Adidas%20Zapatillas.jpg" alt="">
    <hr>

    <?php
$productos=array('AdidasMax'=>'35$','AdidasIpsum'=>'57$','Adidas360'=>'55$','Airmax'=>'132$','Adidasport'=>'210$','Adidasvintage'=>'120$', 'AdidasPaket'=>'310$', 'AdidasCool'=>'109$', 'Adidas77'=>'109$', 'AdidasSOFT'=>'145$');
echo "<br> <br>";

//Ejercicio: Mostrar tipo tabla, productos y precios de zapatillas Adidas.

echo "<table class='tabla'><thead ><td class='cabeza'>PRODUCTO</td><td class='cabeza'>PRECIO</td></thead>";
foreach ($productos as $produ => $element){
    echo "<tr><td>$produ</td><td>$element</td></tr>";
};
echo "</table>"

?>
    <br>
    <hr>
<table>
    <h1>TABLA CON IMÁGENES</h1>
    <?php
    $productos2=array(
        array('img/1.avif', 'AdidasMax', "55 $"),
        array ('img/2.avif',  'AdidasIpsum', "55 $"),
        array ('img/3.avif',  'AirMax', "55 $"),
    );

    ?>

    <h2>TABLA DE PRODUCTOS; Imágen, producto y precio.</h2>
    <table class="tabla">
        <thead class="tabla">
        <td class="cabeza">IMAGEN DEL PRODUCTO</td>
        <td class="cabeza">PRODUCTO</td>
        <td class="cabeza">PRECIO</td>
        </thead>

        <?php
        for($fila=0;$fila<3; $fila++) {
            echo "<tr class='tabla'>";
            for ($col = 0; $col < 3; $col++) {
                if ($col == 0) {
                    echo "<td class='cabeza'><img src='" . $productos2[$fila][$col] . "' class='img2'></td>";
                } else {
                    echo "<td class='cabeza'>" . $productos2[$fila][$col] . "</td>";
                }

            }
            echo "</tr>";
        }

        ?>
</table>

    <thead>
    <td>Imagen</td>
    <td>Descripción</td>
    <td>Precio</td>

    </thead>

    <?php
    foreach ($productos2 as $filas){
        echo "<tr>";
        foreach ($filas as $indice=>$col){
            if ($indice==0){
                echo "<td><img src='" . $col . "'></td>";

            }else {
                echo "<td>$col </td>";
            }
        }
        echo "</tr>";
    }
    ?>

    <h2>Tabla de Comunidades</h2>
    <table>
        <thead class='tabla2'>
        <td>Comunidad Autonoma</td>
        <td>Capital</td>
        <td>Poblacion</td>
        </thead>
        <?php
        $productos2 = array(
            array("Castilla la Mancha", "Toledo", "86.906"),
            array("Madrid", "Madrid", "3.339.931"),
            array("Barcelona", "Barcelona", "1.660.435"),
            array("Valencia", "Valencia", "809.501"),
            array("Andalucia", "Sevilla ", "8.600.441"),
        );
        for($fila=0; $fila<5; $fila++) {
            echo "<tr class='tabla2'>";
            for ($col = 0; $col < 3; $col++) {
                echo "<td class='izq'>" . $productos2[$fila][$col] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <h2>Tabla de Comunidades foreach</h2>
    <table>
        <thead class='tabla2'>
        <td><h1>Comunidad Autónoma<h1></td>
        <td><h1>Capital<h1></td>
        <td><h1>Población<h1></td>
        </thead>
        <?php
        $productos2 = array(
            array("Castilla la Mancha", "Toledo", "86.906"),
            array("Madrid", "Madrid", "3.339.931"),
            array("Barcelona", "Barcelona", "1.660.435"),
            array("Valencia", "Valencia", "809.501"),
            array("Andalucía", "Sevilla ", "8.600.441"),
        );
        foreach($productos2 as $fila) {
            echo "<tr class='tabla2'>";
            foreach ($fila as $col) {
                echo "<td class='izq'>" . $col . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>





</body>
</html>