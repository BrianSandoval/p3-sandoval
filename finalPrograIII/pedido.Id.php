<?php

require_once '../logica/Medico.Clase.php';
require_once '../util/funciones/Funciones.clase.php';
//require_once './token.validar.php';
try {
//    if (validarToken($token)) {
//    }
//    
    $objProducto = new Producto();
    $resultado = $objProducto->idSiguiente();
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "Error");
}