<?php

require_once '../datos/Conexion.clase.php';

class Cliente extends Conexion {

    private $dni;
    private $apellidos_nombres;
    private $telefono;

    function getDni() {
        return $this->dni;
    }

    function getApellidos_nombres() {
        return $this->apellidos_nombres;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setApellidos_nombres($apellidos_nombres) {
        $this->apellidos_nombres = $apellidos_nombres;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

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
