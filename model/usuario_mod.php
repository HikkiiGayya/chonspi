<?php

class usuario_mod
{

    public $id_usuario;
    public $rol_id;
    public $nombre;
    public $nickname;
    public $apellido;
    public $telefono;
    public $correo;
    public $pwd;
    public $pregunta_seguridad1;
    public $respuesta_segurad1;
    public $pregunta_seguridad2;
    public $respuesta_segurad2;
    public $pregunta_seguridad3;
    public $respuesta_segurad3;

    function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    function __set($propiedad, $valor)
    {
        if (property_exists($this, $valor)) {
            return $this->$valor;
        }
    }

    function __construct(
        $id_usuario,
        $rol_id,
        $nickname,
        $nombre,
        $apellido,
        $telefono,
        $correo,
        $pwd,
        $pregunta_seguridad1,
        $respuesta_segurad1,
        $pregunta_seguridad2,
        $respuesta_segurad2,
        $pregunta_seguridad3,
        $respuesta_segurad3
    ) {
        $this->id_usuario = $id_usuario;
        $this->rol_id = $rol_id;
        $this->nickname = $nickname;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->pwd = $pwd;
        $this->pregunta_seguridad1 = $pregunta_seguridad1;
        $this->respuesta_segurad1 = $respuesta_segurad1;
        $this->pregunta_seguridad2 = $pregunta_seguridad2;
        $this->respuesta_segurad2 = $respuesta_segurad2;
        $this->pregunta_seguridad3 = $pregunta_seguridad3;
        $this->respuesta_segurad3 = $respuesta_segurad3;
    }
}
