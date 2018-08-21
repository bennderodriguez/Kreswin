<?php

/**
 * Consulta catalogo de Productos
 */

include './Cookie.php';


echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcrcpr01.bwp', false, $contexto);

