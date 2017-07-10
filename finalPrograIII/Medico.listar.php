<?php

require_once '../logica/Medico.Clase.php';
require_once '../util/funciones/Funciones.clase.php';
//require_once './token.validar.php';
try {
//    if (validarToken($token)) {
//    }
//    
    $objProducto = new Producto();
    $resultado = $objProducto->listar();

    for ($i = 0; $i < count($resultado); $i++) {
        $id = $resultado[$i]["imei"];
        $foto = $objProducto->obtenerFoto($id);

        $resultado [$i]["Foto"] = $foto;
    }
    Funciones::imprimeJSON(200, "", $resultado);
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "Error");
}