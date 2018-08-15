<?php

header('Access-Control-Allow-Origin: *');

$errorMSG = "";
//echo $nameBL= "backlog" . date("Y-m-d h:i:sa") . ".json";
// tipomov
if (empty($_POST["dataArray"])) {
    $errorMSG = "dataArray is required ";
} else {
    $send_data = $_POST["dataArray"];
}
if (empty($_POST["fileName"])) {
    $errorMSG = "fileName is required ";
} else {
    $fileName = $_POST["fileName"];
}
// redirect to success page
if ($errorMSG == "") {
    save_data_json_backlog($send_data, $fileName);
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
 * Cree save_data_json_backlog por que se atoran los datos
 * y aveces no se guardan
 */
function save_data_json_backlog($send_data, $fileName) {
    //Si no existe Crea un archivo nuevo
    $pathFile = '../json/'.$fileName.'.json';
    $NewJsonHistory = fopen($pathFile, "w") or die("Unable to open file!");
    //Escribimos el contenido
    fwrite($NewJsonHistory, $send_data);
    fclose($NewJsonHistory);
    echo 'success';
    deleteSpamKresCloud($pathFile);
}

function deleteSpamKresCloud($pathFile) {
    // Inicializamos nuestras variables
    $i = 1; //contador de línea que se está leyendo
    $numlinea = 2; //línea que se desea borrar
    $aux = array();

// Abrimos el archivo
    $archivo = fopen($pathFile, 'r');

// Hacemos un ciclo y vamos recogiendo linea por linea del archivo.
    while ($linea = fgets($archivo)) {

        if ($i != $numlinea) {  // Si la linea que deseamos eliminar no es esta 
            $aux[] = $linea; // La agregamos a nuestra variable auxiliar
        }

        // Incrementamos nuestro contador de lineas
        $i++;
    }

// Cerramos el archivo.
    fclose($archivo);

// Convertimos el arreglo(array) en una cadena de texto (string) para guardarlo.
    $aux = implode($aux, '');

// Reemplazamos el contenido del archivo con la cadena de texto (sin la linea eliminada)
    file_put_contents($pathFile, $aux);
}
