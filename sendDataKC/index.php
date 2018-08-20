<?php
include_once '../resources/trace.php';

// NAME
//print_r($_POST);

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
//oscar
//echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/Oscar/SwPedidoDat_fc.bwp?xVenta2=0051992&xClie2=000011', false, $contexto);
//Flavio
echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/Flavio/ec/swagregalin_fc.bwp?cVenta22=' . $_POST['cVenta22'] . '&xClie22=' . $_POST['xClie22'] . '&nCant22=' . $_POST['nCant22'] . '&PROD22=' . $_POST['PROD22'], false, $contexto);

$Data = $_POST;
print_r( $Data);