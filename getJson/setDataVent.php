<?php

/**
 * Alta de datos de la venta
 * return: No [{"Pedido" : "*","Error" : "Pedido no disponible "}]
 */
include './Cookie.php';

$errorMSG = "";

if (empty($_POST["xContado"])) {
    $xContado = null;
} else {
    $xContado = $_POST["xContado"];
}
if (empty($_POST["xExportar"])) {
    $xExportar = null;
} else {
    $xExportar = $_POST["xExportar"];
}
if (empty($_POST["xNota1"])) {
    $xNota1 = null;
} else {
    $xNota1 = $_POST["xNota1"];
}
if (empty($_POST["xNota2"])) {
    $xNota2 = null;
} else {
    $xNota2 = $_POST["xNota2"];
}
if (empty($_POST["xNota3"])) {
    $xNota3 = null;
} else {
    $xNota3 = $_POST["xNota3"];
}
if (empty($_POST["xCliente"])) {
    $errorMSG = "xCliente required ";
} else {
    $xCliente = $_POST["xCliente"];
}
if (empty($_POST["xpedido"])) {
    $errorMSG .= "xpedido required ";
} else {
    $xpedido = $_POST["xpedido"];
}


if ($errorMSG == "") {
    echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcravt03.bwp?20&xContado=' . $xContado . '&xExportar=' . $xExportar . '&xNota1=' . $xNota1 . '&xNota2=' . $xNota2 . '&xNota3=' . $xNota3 . '&xCliente=' . $xCliente . '&xpedido=' . $xpedido, false, $contexto);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
