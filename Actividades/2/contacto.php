<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manejo de datos desde HTML Y PHP</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<script src="js/script.js"></script>

<?php
    include 'header.php';

?>

<h1>Formulario de Datos</h1>

<?php
if (isset($_GET['mensaje'])){
    echo  "<ul class='error'>".$_GET['mensaje']."</ul>";
}
?>

<form method="get" action="lectura.php" class="formulario">
<div>
    <p>
    <label for="nombre">Nombre:</label>
    <input id="nombre" maxlength="50" name="nombre"
        class="entradas">
    </p>
    </div>

<div>
    <p>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="entradas">
    </p>
</div>

    <div>
        <p>
            <input type="submit" value="Enviar" name="enviar"
        </p>
    </div>

    <?php
    include 'footer.php';
    ?>


</form>
</body>
</html>