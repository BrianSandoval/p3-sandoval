<?php

require_once '../datos/Conexion.clase.php';

class Cliente extends Conexion {

    public function listarCliente() {
        try {
            $sql = "select * from cliente order by 2";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

}
