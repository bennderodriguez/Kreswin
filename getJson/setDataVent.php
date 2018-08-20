<?php

/**
 * Alta de datos de la venta
 * return: No [{"Pedido" : "*","Error" : "Pedido no disponible "}]
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


echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcravt03.bwp?20&xContado=S&xExportar=S&xNota1=Pruebas01&xNota2=Pruebas02&xNota3=Pruebas03&xCliente=000010', false, $contexto);

