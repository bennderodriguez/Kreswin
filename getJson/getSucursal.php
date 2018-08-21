<?php

/**
 * Consulta catalogo de Sucursal
 */

include './Cookie.php';


echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcrcsc01.bwp', false, $contexto);

