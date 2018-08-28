<?php

header('Access-Control-Allow-Origin: *');

$errorMSG = "";
//echo $nameBL= "backlog" . date("Y-m-d h:i:sa") . ".json";
// tipomov
if (empty($_POST["cookie"])) {
    $errorMSG = "cookie is required ";
} else {
    $cookie = utf8_encode($_POST["cookie"]);
}

// redirect to success page
if ($errorMSG == "") {
    saveCookie($cookie);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

/**
 * 
 * @param type $send_data
 * Cree saveCookie por que se atoran los datos
 * y aveces no se guardan
 */
function saveCookie($cookie) {
    $str= str_replace("SMAS","+",$cookie);
    $head = ' <?php ';
    //Si no existe Crea un archivo nuevo
    $pathFile = '../getJson/valueCookie.php';
    $NewJsonHistory = fopen($pathFile, "w") or die("Unable to open file!");
    //Escribimos el contenido
    fwrite($NewJsonHistory, $head);
    fwrite($NewJsonHistory, 'define("thisCookie", "'.$str.'", false);');
    fclose($NewJsonHistory);
    echo 'success';
}
