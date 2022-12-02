<?php

    $telefono = "+000000000000000";
    $alias = "name";
    $mensaje = "mensajes " . $alias;
    //echo $telefono.' '.$mensaje;
    $url = "https://api.whatsapp.com/send?phone=" . $telefono . "&text=" . $mensaje;
    echo "<SCRIPT>window.location='$url';</SCRIPT>";