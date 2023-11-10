<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manejo de datos desde HTML Y PHP</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<script src="js/script.js"></script>

<h1>Solicitud de Cita Previa</h1>

<div class="formulario">

    <form method="get"  class="formulario1" class="entradas" action="registro.php" novalidate>
    <h3>Indique el servicio al que desea solicitar la cita:</h3>

    <div>
        <p>
            Seguros <input type="radio" name="botoncito">
            Consultoría Jurídica <input type="radio" name="botoncito">
            Administración<input type="radio" name="botoncito">
        </p>
    </div>
    <div>
        <p>
            <b>Seleccione la fecha</b>     <input type="date" name="fecha" id="fecha">
            <b>Seleccione la hora</b>
            <select name="hora">

            <option value="Seleccione"></option>
            <option value="09:30">09:30</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            </select>

        </p>
    </div>


    <h4>Nombre y Apellido:</h4>


        <div class="input-izquierda">
            <input aria-required="true" type="text" required name="nombre" id="nombre" placeholder="Nombre y apellido">
        </div>
        <hr>
        <div>
            <p>
            <div>
                <p>
                <label for="email"><h4>Email:</h4></label>
                </p>
                <input aria-required type="email" id="email" name="email" placeholder="Email" class="entradas">
            </p>
            </div>
            <hr>
        </div>
        <div>
            <p>
            <div>
                <p>
                    <label for="telefono"><h4>Teléfono:</h4></label>
                </p>
                <input  aria-required type="telefono" id="telefono" name="telefono" placeholder="Teléfono" class="entradas">
                </p>
            </div>
            <hr>

            <div>
                <p>
                    <label for="Mensaje"><h4>Mensaje:</h4></label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                </p>


            </div>

        </div>
        <hr>

        <div class="acciones">
            <p>
                <input type="checkbox" id="casilla">
                He leido y acepto la política de privacidad.
                </a>
            </p>
            <p class="centrado">

                <input type="reset" class="boton" value="Limpiar"
            </p>
        </div>

        <?php



if (isset($_GET['mensaje'])){
    echo  "<ul class='error'>".$_GET['mensaje']."</ul>";
}
?>


    <div>
        <p>
            <input type="submit" value="Enviar" name="enviar">
        </p>
    </div>
    </form>



    <?php
    include 'footer.php';
    ?>



</body>
</html>