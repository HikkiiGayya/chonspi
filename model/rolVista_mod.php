<?php

class rolVista_mod
{

    public $id_roles_vistas;
    public $rol_idRol;
    public $vista_idVista;

    function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad;
        }
    }

    function __set($propiedad, $valor)
    {
        if (property_exists($this, $valor)) {
            $this->$valor;
        }
    }

    function __construct(
        $id_roles_vistas,
        $rol_idRol,
        $vista_idVista
    ) {
        $this->id_roles_vistas = $id_roles_vistas;
        $this->rol_idRol = $rol_idRol;
        $this->vista_idVista = $vista_idVista;
    }
}
