<?php
    include "modelo/conexion.php";
    global  $link;
    $link = conectar();
    if (!empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["nombre"])){
    echo "entra!!!";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $paso = true;

    if (validarEmail($email)){
        echo "Email validado correctamente";
    }else{
        echo "Email en formato incorrecto";
        $paso=false;
    }
    if (validarPass($pass)){
        echo "<br> Password cumple los requisitos <br>";
    }else{
        echo "<br> Aumente la seguridad <br>";
        $paso=false;
    }
    //funcion que se llama para buscar si existe el email en la bbdd.
    if (!validarEmailBBDD($email)){
        echo"El email existe";
        $paso=false;
    }
//funcion que guarda el registro cuando todo es correcto en la bbdd.
    if ($paso){
        $passSeguro=password_hash($pass, PASSWORD_BCRYPT);
        echo "<br>". $passSeguro;
        $insertarUser="insert into usuarios (email,pass,nombre) values ('" . $email. "','" . $passSeguro . "','". $nombre. "')";
        $result = mysqli_query($link,$insertarUser);
        if ($result){
            echo "<br>Actualizado correctamente";
        }else{
            echo "<br> ERROR CREAR EN BBDD";
            $paso=false;
        }
    }   mysqli_close($link);
}
function validarEmail($email){
    $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (preg_match($regex, $email)){
        return true;
    }else{
        return false;
    }
}
function validarPass($pass){
    $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if (preg_match($regex, $pass)){
        return true;
    }else{
        return false;
    }
    }
//funcion para validar que el email no exista en la bbdd.


function validarEmailBBDD($email){
    global $link;
    $consulta = "select * from usuarios where email='".$email."';";
    $resultado = mysqli_query($link,$consulta); //ejecutar la consulta
    $numRows=mysqli_num_rows($resultado);
    if ($numRows!=0){
        return false;
    }else{
        return true;
    }
}


