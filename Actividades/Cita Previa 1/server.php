<?php
    $url=$_SERVER["HTTP_HOST"]
       .$_SERVER["REQUEST_URI"];
    echo $url;
    $servidor=$_SERVER["SERVER_NAME"];
    echo '<br>';
echo $servidor;
?>