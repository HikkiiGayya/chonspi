<?php

require_once '../config/conex.php';
require_once '../model/usuario_mod.php';
require_once '../model/usuario_consulta.php';

class usuario_ctrl
{

    private $mensaje;
    private $estado;

    function register_usuario()
    {
        $usuario_consulta = new usuario_consulta();
        $objeto_usuario = new usuario_mod(
            0,
            1,
            $_POST['nickname'],
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['telefono'],
            $_POST['correo'],
            $_POST['pwd'],
            $_POST['pregunta_seguridad1'],
            $_POST['respuesta_segurad1'],
            $_POST['pregunta_seguridad2'],
            $_POST['respuesta_segurad2'],
            $_POST['pregunta_seguridad3'],
            $_POST['respuesta_segurad3']
        );

        if ($usuario_consulta->register_usuario($objeto_usuario)) {
            //la peticion se ejecuto correctamente
            $this->estado = "suc    cess";
            $this->mensaje = "Excelente, se guardo correctamente";
        } else {
            $this->estado = "danger";
            $this->mensaje = "error, intente de nuevo";
        }

        echo json_encode(
            array(
                //para enviar el resultado de la peticion se procede a utilizar un archivo JSON
                "estado" => $this->estado,
                "mensaje" => $this->mensaje
            )
        );
    }
}

if (isset($_REQUEST['function'])) {
    $function = $_REQUEST['function'];
    $usuario_ctrl = new usuario_ctrl();
    if ($function == "register_usuario") {
        $usuario_ctrl->register_usuario();
    }
}
