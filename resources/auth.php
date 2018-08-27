<?php

$errorMSG = "";

// Recibimos usuario y password
if (empty($_POST["UserName"])) {
    $errorMSG = " User Name is empty";
} else {
    $user = $_POST["UserName"];
}
if (empty($_POST["Password"])) {
    $errorMSG .= " Password is empty";
} else {
    $password = $_POST["Password"];
}
// si no hay errores
if ($errorMSG == "") {
    LogIn($user, $password);
} else {
    if ($errorMSG == "") {
        echo " Something went wrong : Login invalid ";
    } else {
        echo $errorMSG;
    }
}

function LogIn($user, $password) {
    session_start();
    // Set vars sessions
    $_SESSION["usuario"] = $user;
    $_SESSION["id_user"] = $password;
    $_SESSION['loggedin'] = true;
    $_SESSION['start'] = time();

    //*TOKEN WEB*//
    $token = md5(uniqid(rand(), TRUE));
    $_SESSION['token'] = $token;
    $_SESSION['token_nacimiento'] = time();
    //*TOKEN WEB*//
    //define duracion de la session
    //Tiempo de vida de la session
    $lifetime = 120;
    $_SESSION['expire'] = $_SESSION['start'] + (60 * $lifetime);
    //define el menu que vera el usuario
    echo "success";
}
