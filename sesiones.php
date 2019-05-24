<?php
//Reanudamos la sesión 
if (isset($_POST["username"])) {
    $_SESSION["autentica"] = true;
    $_SESSION["username"] = $_POST["username"];
    session_start();
}

if (isset($_SESSION["autentica"])) {
    if ($_SESSION["autentica"] == false) {
        foreach ($_SESSION as $key => $value) {
            $_SESSION[$key] = NULL;
        }

        session_unset();

        session_destroy();

        header('Location: login.php');
        exit();
    }
} else {
    foreach ($_SESSION as $key => $value) {
        $_SESSION[$key] = NULL;
    }

    session_unset();

    session_destroy();

    header('Location: login.php');
    exit();
}
