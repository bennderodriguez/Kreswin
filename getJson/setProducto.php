<?php

/**
 * Alta de producto
 */

setcookie("cCresweb", "zq+mtrjHtr7f39/f39/LzM3O39/f382ekY2anQ==");

// Crear un flujo
$opciones = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
        "Cookie: cCresweb=zq+mtrjHtr7f39/f39/LzM3O39/f382ekY2anQ=="
    )
);

$contexto = stream_context_create($opciones);


echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcravd01.bwp?cVenta22=0051997&xClie22=000010&nCant22=10&PROD22=010', false, $contexto);

