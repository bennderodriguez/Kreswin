<?php

/**
 * Solicita datos del cliente para asignar a la venta
 * return: [{"Pedido" : "0051997","Error" : "Pedido no disponible "}]
 *  data: 'xVenta2=' + Venta + '&xClie2=' + Cliente,
 */

include './Cookie.php';

$errorMSG = "";
if (empty($_POST["xVenta2"])) {
    $errorMSG = "xVenta2 is required ";
} else {
    $xVenta2 = $_POST["xVenta2"];
}
if (empty($_POST["xClie2"])) {
    $errorMSG = "xClie2 is required ";
} else {
    $xClie2 = $_POST["xClie2"];
}

if ($errorMSG == ""){
   echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcravt02.bwp?xVenta2='.$xVenta2.'&xClie2='.$xClie2, false, $contexto);
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

