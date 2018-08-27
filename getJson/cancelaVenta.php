<?php

include './Cookie.php';

/**
 * Cancela Venta
 * param 
 */

$errorMSG = "";
if (empty($_POST["cVenta22"])) {
    $errorMSG = "cVenta22 is required ";
} else {
    $cVenta22 = $_POST["cVenta22"];
}

if ($errorMSG == ""){
   echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcaped01.bwp?cVenta22='.$cVenta22, false, $contexto);
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}