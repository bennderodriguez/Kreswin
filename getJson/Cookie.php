<?php

include '../resources/trace.php';

// Crear un flujo
$opciones = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
        "Cookie: cCresweb=zrWzurPHtr7f39/f39/LzM3O39/f39+ekY2anQ=="
        
    )
);

$contexto = stream_context_create($opciones);

