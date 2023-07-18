<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <?php require_once("libreria.php") ?>
    <!-- JS  -->
    <script src="../js/usuario.js"></script>
    <script src="../js/jquery-3.7.0.min.js"></script>
</head>

<body>
    <div class="container-nav">
        <nav class="nav-main">
            <ul class="nav-menu">
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Registrar</a>
                </li>
                <li>
                    <a href="#">NN</a>
                </li>
                <li>
                    <a href="#">NN</a>
                </li>
            </ul>
        </nav>
        <hr>
    </div>
    <div class="container-register">
        <div class="container-form">
            <h3>Registrar usuario</h3>
            <!-- <form action="../controller/usuario_ctrl.php" method="post"> -->
            <div class="datos-usuario">
                <label for="" class="detalles">Nombres</label>
                <input type="text" placeholder="Introduce tus nombres" name="nombre" id="nombre" required minlength="1" maxlength="45">
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Apellidos</label>
                <input type="text" placeholder="Introduce tus apellidos" name="apellido" id="apellido" required minlength="1" maxlength="45">
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Nickname</label>
                <input type="text" placeholder="Introduce tu nickname" name="nickname" id="nickname" required minlength="1" maxlength="45">
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Telefono</label>
                <input type="number" placeholder="Introduce tu telefono" name="telefono" id="telefono" required>
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Correo electronico</label>
                <input type="email" placeholder="Introduce tu correo electronico" name="correo" id="correo" required minlength="1" maxlength="100">
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Contraseña</label>
                <input type="password" placeholder="Introduce tu contraseña " name="pwd" id="pwd" required minlength="1" maxlength="45">
            </div>
            <!-- AQUI INICIAN LAS PREGUNTAS SEGURIDAD -->
            <div class="datos-usuario">
                <!-- PREGUNTA DE SEGURIDAD UNO -->
                <label for="" class="detalles">Pregunta de seguridad uno</label>
                <select id="pregunta_seguridad1" required data-original-title="Seleccione la pregunta uno">
                    <option disabled selected>Seleecione una pregunta seguridad</option>
                    <option value="1">¿Cuál es el nombre de su mascota?</option>
                    <option value="2">¿Cuál es el nombre de su mejor amigo(a) de infancia?</option>
                    <option value="3">¿Colegio en el cual obtuvo su título de bachiller?</option>
                    <option value="4">¿Cuál es el trabajo de sus sueños?</option>
                    <option value="5">¿Quien es duki?</option>
                    <option value="6">¿Cuál es su marca favorita?</option>
                </select>
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Respuesta de pregunta uno</label>
                <input type="text" placeholder="Introduce tu respuesta" name="respuesta_segurad1" id="respuesta_segurad1" required minlength="1" maxlength="45">
            </div>
            <div class="datos-usuario">
                <!-- PREGUNTA DE SEGURIDAD DOS -->
                <label for="" class="detalles">Pregunta de seguridad dos</label>

                <select id="pregunta_seguridad2" required data-original-title="Seleccione la pregunta dos">
                    <option disabled selected>Seleecione una pregunta seguridad</option>
                    <option value="1">¿Cuál es el nombre de su mascota?</option>
                    <option value="2">¿Cuál es el nombre de su mejor amigo(a) de infancia?</option>
                    <option value="3">¿Colegio en el cual obtuvo su título de bachiller?</option>
                    <option value="4">¿Cuál es el trabajo de sus sueños?</option>
                    <option value="5">¿Quien es duki?</option>
                    <option value="6">¿Cuál es su marca favorita?</option>
                </select>
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Respuesta de pregunta dos</label>
                <input type="text" placeholder="Introduce tu respuesta" name="respuesta_segurad2" id="respuesta_segurad2" required minlength="1" maxlength="45">
            </div>
            <div class="datos-usuario">
                <!-- PREGUNTA DE SEGURIDAD TRES -->
                <label for="" class="detalles">Pregunta de seguridad tres</label>

                <select id="pregunta_seguridad3" required data-original-title="Seleccione la pregunta tres">
                    <option disabled selected>Seleecione una pregunta seguridad</option>
                    <option value="1">¿Cuál es el nombre de su mascota?</option>
                    <option value="2">¿Cuál es el nombre de su mejor amigo(a) de infancia?</option>
                    <option value="3">¿Colegio en el cual obtuvo su título de bachiller?</option>
                    <option value="4">¿Cuál es el trabajo de sus sueños?</option>
                    <option value="5">¿Quien es duki?</option>
                    <option value="6">¿Cuál es su marca favorita?</option>
                </select>
            </div>
            <div class="datos-usuario">
                <label for="" class="detalles">Respuesta de pregunta tres</label>
                <input type="text" placeholder="Introduce tu respuesta" name="respuesta_segurad3" id="respuesta_segurad3" required minlength="1" maxlength="45">
            </div>

            <!-- BOTON ENVIAR RESPUESTAS-->
            <button type="submit" name="enviar_respuestas" onclick="register_usuario();">Registrar</button>
            <!-- BOTON DE LIMPIAR CAMPOS -->
            <button type="submit">Limpiar</button>
        </div>
    </div>
    </div>
    </div>

    </div>
</body>

</html>