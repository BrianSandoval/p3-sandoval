<?php

require_once '../logica/Sesion.clase.php';
require_once '../util/funciones/Funciones.clase.php';
//
//print_r($_POST);
if (!isset($_POST["email"])) {
    Funciones::imprimeJSON(500, "Falta completar los datos requeridos", "");
    exit();
}

$email = $_POST["email"];


try {
    $objSesion = new Sesion();
    $objSesion->setEmail($email);
    $resultado = $objSesion->validarSesion();

    if ($resultado["estado"] == 200) {
        unset($resultado["estado"]);

        Funciones::imprimeJSON(200, "Bienvenido a la aplicación móvil", $resultado);
    } else {
        Funciones::imprimeJSON(500, $resultado, ""); // Depene del nombre de la tabla en tu bd
    }
} catch (Exception $exc) {

    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}