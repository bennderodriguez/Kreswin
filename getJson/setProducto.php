<?php

/**
 * Alta de producto
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
if (empty($_POST["nCant22"])) {
    $errorMSG .= "nCant22 is required ";
} else {
    $nCant22 = $_POST["nCant22"];
}
if (empty($_POST["PROD22"])) {
    $errorMSG .= "PROD22 is required ";
} else {
    $PROD22 = $_POST["PROD22"];
}

if ($errorMSG == "") {
    echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcravd01.bwp?cVenta22=' . $cVenta22 . '&xClie22=' . $xClie22 . '&nCant22=' . $nCant22 . '&PROD22=' . $PROD22, false, $contexto);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}



