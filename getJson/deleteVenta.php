<?php

/**
 * Elimina Venta Total
 * return: [{"Exito" : "El Pedido 0051997 ha sido eliminado"},]
 */

include './Cookie.php';


echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcrbvt01.bwp?cVenta22=0051997', false, $contexto);

