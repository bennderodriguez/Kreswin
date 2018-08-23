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
if (empty($_POST["xdes22"])) {
    $xdes22 = null;
} else {
    $xdes22 = $_POST["xdes22"];
}
if (empty($_POST["xdesc"])) {
    $errorMSG .= "xdesc is required ";
} else {
    $xdesc = $_POST["xdesc"];
}

if ($errorMSG == "") {
    echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcravd01.bwp?cVenta22=' . $cVenta22 . '&xClie22=' . $xClie22 . '&nCant22=' . $nCant22 . '&PROD22=' . $PROD22 .'&xdes22='.$xdes22.'&xdesc='.$xdesc, false, $contexto);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

                           //http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/flavio/swcravd01.bwp?cVenta22=0052010&xClie22=010&nCant22=1&PROD22=15&xdes22=5.00&xdesc=hola2
                           //http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/flavio/swcravd01.bwp?cVenta22=0052112&xClie22=000015&nCant22=1&PROD22=10&xdes22=5.00&xdesc=meeee
