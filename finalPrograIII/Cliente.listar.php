<?php

require_once '../logica/Medico.Clase.php';
require_once '../util/funciones/Funciones.clase.php';
//require_once './token.validar.php';
try {
    $objProducto = new Cliente();
    $resultado = $objProducto->listarCliente();
    for ($i = 0; $i < count($resultado); $i++) {
        
    }
    Funciones::imprimeJSON(200, "", $resultado);
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "Error");
}