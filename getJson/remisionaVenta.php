<?php

include './Cookie.php';

/**
 * Cancela Remisiona Venta
 * param :
 * DEFAULT cVenta2 := '#'
 * DEFAULT cPago := 0 F o R
 * DEFAULT cTipop:= "#"
 * programa para facturar y remisionar
 */
$errorMSG = "";
if (empty($_POST["cVenta22"])) {
    $errorMSG = "cVenta22 is required ";
} else {
    $cVenta22 = $_POST["cVenta22"];
}
if (empty($_POST["cPago"])) {
    $errorMSG .= "cPago is required ";
} else {
    $cPago = $_POST["cPago"];
}
if (empty($_POST["cTipop"])) {
    $errorMSG .= "cTipop is required ";
} else {
    $cTipop = $_POST["cTipop"];
}

if ($errorMSG == "") {
    //echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcrcarcli01.bwp?cventa2='.$cVenta22, false, $contexto);
    echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcrcarcli01.bwp?cventa2='.$cVenta22.'&cTipop='.$cTipop.'&cPago='.$cPago, false, $contexto);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
