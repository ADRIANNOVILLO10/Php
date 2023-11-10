<?php
    session_start();
    include "header.php";
    //validamos que solo entren en esta página los usuarios autorizados.
    if (!isset($_SESSION["usuario"])){
        header("Location:http://localhost:63342/Actividades/Actividades/Banco%20online/login.php?mensaje = Usuario no autorizado");
    }

    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">SISTEMA DE ALTA CLIENTES</span>
    </div>
    <div class="opciones">
        <p> <span class="material-symbols-outlined">settings_accessibility</span>
            <?=$_SESSION["usuario"]?></p>

    </div>





</body>
</html>