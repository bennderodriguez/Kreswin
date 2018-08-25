<?php

/**
 * Elimina producto
 */
include './Cookie.php';

$errorMSG = "";
if (empty($_POST["cVenta22"])) {
    $errorMSG = "cVenta22 is required ";
} else {
    $cVenta22 = $_POST["cVenta22"];
}
if (empty($_POST["xClie22"])) {
    $errorMSG .= "xClie22 is required ";
} else {
    $xClie22 = $_POST["xClie22"];
}
if (empty($_POST["PROD22"])) {
    $errorMSG .= "PROD22 is required ";
} else {
    $PROD22 = $_POST["PROD22"];
}
if (empty($_POST["nCant22"])) {
    $nCant22 = "0";
} else {
    $nCant22 = $_POST["nCant22"];
}
if (empty($_POST["xdes22"])) {
    $xdes22 = "0";
} else {
    $xdes22 = $_POST["xdes22"];
}


if ($errorMSG == "") {
    echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/flavio/swcrmvd01.bwp?cVenta22='.$cVenta22.'&xClie22='.$xClie22.'&nCant22='.$nCant22.'&PROD22='.$PROD22.'&xdes22='.$xdes22.'&xnota122=hola1&xnota222=hola2&xnota322=hola3', false, $contexto);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

