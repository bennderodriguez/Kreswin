<?php

/**
 * Consulta catalogo de Rutas
 */

include './Cookie.php';


echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcrcrt01.bwp', false, $contexto);

