<?php
include "header.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAMBIO DE CONTRASEÑA</title>
</head>
<body>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">CAMBIO DE CONTRASEÑA</span>
    </div>
</div>
<div class="caja-blanca">
    <form action="" method="get" class="login">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <input type="password" name="pass2" placeholder="REPETIR CONTRASEÑA" required>
        <input type="submit" class="boton">
        </form>
        <h4>Las contraseñas deben cumplir los siguientes criterios</h4>
        <ul class="lista">
            <li>Longitud 8 caracteres</li>
            <li>Al menos una mayúscula</li>
            <li>Al menos una miníscula</li>
            <li>Al menos un número</li>
        </ul>

</div>
<?php
    //1. Verificar que el email existe

    if (!empty($_GET["email"]) && !empty($_GET["pass"]) && !empty($_GET["pass2"])){
        $email=$_GET["email"];
        $passFormulario=$_GET["pass"];
        $passFormulario2=$_GET["pass2"];
    // Hacer la consulta en la bbdd
        $consulta="select * from usuarios where email='$email'";
        include "modelo/conexion.php";
        $link=conectar();
        $resultado=mysqli_query($link,$consulta); //resultado
        $row=mysqli_num_rows($resultado);
        if ($row!=0){
            $registro=mysqli_fetch_assoc($resultado);
            echo "Correcto!";

            //Comprobamos que los dos password son iguales
            if ($passFormulario==$passFormulario2 && validarPass($passFormulario)){
                    //actualizamos la bbdd
                 //   echo "Vamos a actualizar la BBDD";
                /**************/
                // convertimos esa contraseña e

                $encriptar=password_hash($_GET["pass"],PASSWORD_BCRYPT);
                $actualizar="update usuarios set pass='$encriptar' where email='$email'";
                //ejecutamos la consulta
                    $resultadoUpd=mysqli_query($link,$actualizar);
                if ($resultadoUpd){
                    $mensaje="Registro actualizado correctamente";
                   // echo "<br>Registro actualizado correctamente";
                }else{
                  //  echo "<br>Error al actualizar";
                }
                }else {
                    $mensaje="Los password no son iguales o no cumple con criterios de complejidad";
                    echo "<br> $mensaje";                }

        }else{
            $mensaje="El email no existe";
           // echo $mensaje;
        }
        header("Location:http://localhost:63342/Actividades/Actividades/Banco%20online/password.php?mensaje=$mensaje");
    }

        function validarPass($pass){
            $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
            if (preg_match($regex, $pass)){
                return true;
            }else{
                return false;
            }
        }


       /* $encriptar=password_hash($_GET["pass"],
        PASSWORD_BCRYPT);
        echo "<br> El password encriptado ".$_GET['pass']." es: ".$encriptar;*/

?>

</body>
</html>