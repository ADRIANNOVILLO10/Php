<?php
$nombre=$_GET['nombre'];
$email=$_GET['email'];
$telefono=$_GET['telefono'];
$fecha=$_GET['fecha'];
$hora=$_GET['hora'];

echo"$hora";
?>
<body>
<div class="formulario">
    <br>
    <p>Gracias por solicitar su informe con el nombre de <?=$nombre?> Recibira un email en la dirección <?=$email?> para confirmar su cita con el </p>
    <p><b>Datos de la Cita:</b></p>
    <p><b>Fecha:</b> <?=$fecha?> </p>
    <p><b>Hora:</b> <?=$hora?> </p>

    <p class="SALIR"><a href="contacto.php">Salir</a>  </p>

</div>

<div class="registro">
    <h2> Gracias <i><?=$nombre?></i> por contactar con nosotros</h2>
    <p>En breve recibirás un email a <i><?=$email?></i></p>
</div>

<hr>

<?php
$destinatario = $email;
$asunto = "Bienvenido a nuestra Web";
$cuerpo = '
<html>
<head>
   <title>Bienvenido a nuestra Web</title>
   <style>
   h1{
   color: darkred;
   }
   p{
   color: dimgray;
   }
</style>
</head>
<body>
<h1>Hola amigos!</h1>
<p>
<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP.

</p>
</body>
</html>
';

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers .= "From: $email\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: irina@ceatformacion.com\r\n";

//ruta del mensaje desde origen a destino
$headers .= "Return-path: irina@ceatformación.com\r\n";

//direcciones que recibián copia
//	$headers .= "Cc: direccion@dominio.com\r\n";

//direcciones que recibirán copia oculta
//	$headers .= "Bcc: direccion@dominio.com,direccion@dominio.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>



<h1>¡QUE TENGA UN BUEN DÍA!</h1>
<img class="imgcitaprevia" src="img/Cita%20Previa.jpg" alt="">
<?php
include 'footer.php';
?>
</body>
</html>





