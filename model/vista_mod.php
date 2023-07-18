<?php


class vista_mod
{
    public $id_vista;
    public $url;
    public $estado;

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
        $id_vista,
        $url,
        $estado
    ) {
        $this->id_vista = $id_vista;
        $this->url = $url;
        $this->estado = $estado;
    }
}
