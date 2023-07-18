<?php

class rol_mod
{
    public $id_rol;
    public $descripcion;
    public $estado;

    function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }
    function __set($propiedad, $valor)
    {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }
    }

    function __construct(
        $id_rol,
        $descripcion,
        $estado
    ) {
        $this->id_rol = $id_rol;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
    }
}
