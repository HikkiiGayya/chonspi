<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- FONT MONTSERRAT -->
    <link rel="stylesheet" href="<link href=" https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <!-- CONEXION ARCHIVO CSS -->
    <link rel="stylesheet" href="../css/styles.css">
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
        <div class="container-register">
            <div class="container-form">
                <h3>Registrar usuario</h3>
                <form action="" method="post">
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
                        <input type="number" placeholder="Introduce tu telefono" name="telefono" id="telefono" required min="3000000000" max="3559999999">
                    </div>
                    <div class="datos-usuario">
                        <label for="" class="detalles">Correo electronico</label>
                        <input type="email" placeholder="Introduce tu correo electronico" name="email" id="email" required minlength="1" maxlength="100">
                    </div>
                    <div class="datos-usuario">
                        <label for="" class="detalles">Contraseña</label>
                        <input type="password" placeholder="Introduce tu contraseña " name="pwd" id="pwd" required minlength="1" maxlength="45">
                    </div>
                    <!-- AQUI INICIAN LAS PREGUNTAS SEGURIDAD -->
                    <div class="datos-usuario">
                        <!-- PREGUNTA DE SEGURIDAD UNO -->
                        <label for="" class="detalles">Pregunta de seguridad uno</label>
                        <select id="pregunta1" required data-original-title="Seleccione la pregunta uno">
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
                        <input type="text" placeholder="Introduce tu respuesta" name="txtRespuesta1" id="txtRespuesta1" required minlength="1" maxlength="45">
                    </div>
                    <div class="datos-usuario">
                        <!-- PREGUNTA DE SEGURIDAD DOS -->
                        <label for="" class="detalles">Pregunta de seguridad dos</label>

                        <select id="pregunta1" required data-original-title="Seleccione la pregunta dos">
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
                        <input type="text" placeholder="Introduce tu respuesta" name="txtRespuesta2" id="txtRespuesta2" required minlength="1" maxlength="45">
                    </div>
                    <div class="datos-usuario">
                        <!-- PREGUNTA DE SEGURIDAD TRES -->
                        <label for="" class="detalles">Pregunta de seguridad tres</label>

                        <select id="pregunta1" required data-original-title="Seleccione la pregunta tres">
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
                        <input type="text" placeholder="Introduce tu respuesta" name="txtRespuesta3" id="txtRespuesta3" required minlength="1" maxlength="45">
                    </div>

                    <!-- BOTON ENVIAR RESPUESTAS-->
                    <button type="submit" name="enviar_respuestas" onclick="">Registrar</button>
                    <!-- BOTON DE LIMPIAR CAMPOS -->
                    <button type="submit">Limpiar</button>
            </div>

        </div>
    </div>


    </form>
    </div>
    </div>

    </div>
</body>

</html>