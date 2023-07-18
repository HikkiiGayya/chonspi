<?php

class conexion
{
    private $user = "root";
    private $pwd = "";
    private $server = "localhost";
    private $db = "chonspi";
    private $conexion = "";

    public function getConexion()
    {
        try {
            $this->conexion = new PDO(
                "mysql:host=$this->server;
            dbname=$this->db",
                $this->user,
                $this->pwd
            );
            return $this->conexion;
        } catch (PDOException $e) {
            echo "Error en la conexion de la base de datos" . $e->getMessage();
            return "";
        }
    }

    public function closeConexion()
    {
        $this->conexion = null;
    }
}

/* $objetoConexion = new conexion();
print_r($objetoConexion->getConexion());
$objetoConexion->closeConexion();
 */