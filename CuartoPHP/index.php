<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de coche</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <p class="error">
            <?php
            if (!empty($_GET["mns"]))
                echo $_GET["mns"];
                ?>


        <form action="Coche.php" method="get">
            <p>
            <label for="color">Color</label>
            <input name="color" id="color">
            </p>
            <p>
                <label for="potencia">Potencia:</label>
                <input name="potencia" id="potencia">
            </p>
            <p>
                <label for="marca">Marca:</label>
                <input name="marca" id="marca">
            </p>


            <input type="submit" value="Registrar">
        </form>



    </div>
</body>
</html>