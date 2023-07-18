<?php

require_once '../config/conex.php';
require_once '../model/usuario_mod.php';

class usuario_consulta
{
    // en este archivo se van a crear
    // los metodos para consultar de base de datos
    // esta variable funcion como base de datos local
    // se procede a crear un objeto de tipo persona
    public static $listaElementos = [];

    public function register_usuario($objeto_usuario)
    {
        try {
            $sql = "INSERT INTO usuarios (
                rol_id,
                nombre,
                nickname,
                apellido,
                telefono,
                correo,
                pwd,
                pregunta_seguridad1,
                respuesta_segurad1,
                pregunta_seguridad2,
                respuesta_segurad2,
                pregunta_seguridad3,
                respuesta_segurad3
             ) VALUES (
                1,
               '$objeto_usuario->nombre',
               '$objeto_usuario->nickname',
               '$objeto_usuario->apellido',
               '$objeto_usuario->telefono',
               '$objeto_usuario->correo',
               '$objeto_usuario->pwd',
               '$objeto_usuario->pregunta_seguridad1',
               '$objeto_usuario->respuesta_segurad1',
               '$objeto_usuario->pregunta_seguridad2',
               '$objeto_usuario->respuesta_segurad2',
               '$objeto_usuario->pregunta_seguridad3',
               '$objeto_usuario->respuesta_segurad3'
             )";

            // establecer conexion con la base de datos
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->getConexion();
            // se prepara la sentencia
            $resultado = $conexion->prepare($sql);
            // se ejecuta la sentencia
            $resultado->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error registrar: " . $e->getMessage();
            return false;
        }
    }

    public function consultar_lista_usuario()
    {
        return $this::$listaElementos;
    }
    public function consultar_usuario($indice)
    {
        return $this::$listaElementos[$indice];
    }
}
