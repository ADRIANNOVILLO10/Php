<?php

//if(isset($_GET['enviar'])) {
    if ($_GET['nombre']) {
        $nombre = $_GET['nombre'];
    }else{
        $mns="<li>El nombre es Obligatorio</li>";
    }
    if($_GET['email']) {
        $email = $_GET['email'];
    }else{
        $mns = $mns."<li>El email es Obligatorio</li>";
    }

//    echo "Hola $nombre, tu email es $email!;

    if ($mns!=""){
        header(header:"Location:http://localhost:63342/Mis%20proyectos/Actividades/2/contacto.php?mensaje=$mns");
    }else {
        //función que permite enviar/ llamar de una página a otra y enviar datos
        header(header:"Location:http://localhost:63342/Mis%20proyectos/Actividades/2/registro.php?nombre=~$nombre&email=$email");
         }







