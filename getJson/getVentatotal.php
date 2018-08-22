<?php

/**
 * Consulta catalogo de Sucursal
 */
include './Cookie.php';


$errorMSG = "";
if (empty($_GET["cVenta2"])) {
    $errorMSG = "cVenta2 is required ";
} else {
    $cVenta2 = $_GET["cVenta2"];
}

if ($errorMSG == "") {
    echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcovd01.bwp?cVenta2=' . $cVenta2, false, $contexto);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}


