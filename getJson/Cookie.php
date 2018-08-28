<?php

include '../resources/trace.php';
include '../resources/session.php';
include './valueCookie.php';

$CookieNow = constant("thisCookie");

// Crear un flujo
$opciones = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
        //"Cookie: cCresweb=zrWzurPHtr7f39/f39/LzM3O39/f39+ekY2anQ=="
        //"Cookie: cCresweb=zr66xrDHtr7f39/f39/LzM3O39/f39+ekY2anQ=="
        "Cookie: cCresweb=$CookieNow"
    )
);

$contexto = stream_context_create($opciones);

