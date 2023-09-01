<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manejo de datos desde HTML Y PHP</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<?php
include 'header.php';
?>

<h1>Formulario de Datos</h1>
<form method="post" action="lectura.php" class="formulario">
<div>
    <p>
    <label for="nombre">Nombre:</label>
    <input id="nombre" maxlength="50" name="nombre">
    </p>
    </div>

<div>
    <p>
        <label for="edad">Edad:</label>
        <input type?="number" id="edad" min="0" max="100" step="1"
               name="edad">
    </p>
</div>

    <div>
    <p>
    <label for="nombre">Nombre:</label>
    <input id="nombre" maxlength="50" name="nombre">
    </p>
    </div>

<div>
    <p>
        <label for="edad">Edad:</label>
        <input type?="number" id="edad" min="0" max="100" step="1"
               name="edad">
    </p>
</div>



    <div>
        <p>
            <input type="submit" value="Enviar"
        </p>
    </div>


    <?php
    include 'footer.php';
    ?>



</form>
</body>
</html>