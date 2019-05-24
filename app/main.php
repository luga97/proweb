<?php
//requerimos el archivo config para llamar a la funcion coneccion() la cual devuelve el objeto de conexion 
require("config.php");

//conectar con la base de datos
$conn = coneccion();

// verificar que lleguen por post los datos enviados desde app.js
//la variable $_POST["condicion"] indica al switch desde que funcion se esta llamando en app.js y depediendo de esto se hara el proceso indicado
if (isset($_POST["condicion"])) {
    // si llega la condicion, y es igual a la condicion que necesitas para entrar ejecuta la función y devuelve el resultado
    switch ($_POST["condicion"]) {
        case "comprobarLogin":
            comprobarLogin($_POST["username"], $_POST["password"]);
            break;
        case "AñadirPedido":
            AñadirPedido($_POST["pedido"]);
            break;
    }
    exit();
}

//todas las funciones son llamadas desde el swtich el cual se encarga de indicar de donde viene el llamado

function comprobarLogin($username, $password)
{
    //usamos global $conn para usar la variable global que almacena al objeto msqli
    global $conn;

    $query = "SELECT * FROM Usuarios ORDER BY username ASC"; //trae todos los datos de la tabla de manera ascendiente
    $result = $conn->query($query); //hacemos la consulta y el resultado lo almacenamos en result
    while ($res = $result->fetch_assoc()) { //en res se iteraran las filas de la tabla
        if ($res["username"] == $username && $res["password"] == $password) {
            echo "true";
            session_start();
            $_SESSION["autentica"] = true;
            $_SESSION["user"] = $username;
        } else {
            echo "false";
        }
    }
}
