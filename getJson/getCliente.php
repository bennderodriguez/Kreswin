<?php

/**
 * Consulta catalogo de Clientes
 */

include './Cookie.php';


echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/rockjs/swcrccl01.bwp', false, $contexto);

