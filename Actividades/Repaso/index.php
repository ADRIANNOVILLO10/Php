<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REPASO DÍAS, MESES Y AÑOS Y VALIDAR NOMBRE DE JUAN</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<?php
session_start();
?>
<body>
<h1> - Ingresa la fecha de tu cumpleaños -</h1>
<h2> - Día* -</h2>
<h2> - Mes* -</h2>
<h2> - Año* -</h2>

<hr>
<form action="dos.php" method="get">

    <select name="dia" id="dia">
        <option>Seleccione un dia</option>
        <?php  for($i=1;$i<=31;$i++){   ?>
            <option><?=$i?></option>
            <?php
        }
        ?>

    </select>
<select name="mes" id="mes">
    <option>Seleccione un mes</option>
    <?php  for($i=1;$i<=12;$i++){   ?>
    <option><?=$i?></option>
    <?php
    }
    ?>


</select><select name="anio" id="anio">
    <option>Seleccione un año</option>
    <?php  for($i=2023;$i>=1975;$i--){   ?>
    <option><?=$i?></option>
    <?php
    }
    ?>
</select>

    <input name="nombre">
</select>


    <input type="submit" value="Enviar">
    <h3> - ¡Escribe el nombre de Juan, si escribes otro nombre dará error!</h3>
</form>


<?php
    if (!empty($_SESSION["mensaje"])){
        //var_dump($_SESSION["mensaje"]);
        foreach ($_SESSION["mensaje"] as $msn){
            echo"<li>$msn</li>";
        }
    }

?>
<hr>




</body>
</html>