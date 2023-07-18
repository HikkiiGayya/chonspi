function register_usuario() {
    var nombre = document.getElementById("nombre");
    var nickname = document.getElementById("nickname");
    var apelldio = document.getElementById("apellido");
    var correo = document.getElementById("correo");
    var pwd = document.getElementById("pwd");
    var telefono = document.getElementById("telefono");
    var pregunta_seguridad1 = document.getElementById("pregunta_seguridad1");
    var respuesta_segurad1 = document.getElementById("respuesta_segurad1");
    var pregunta_seguridad2 = document.getElementById("pregunta_seguridad2");
    var respuesta_segurad2 = document.getElementById("respuesta_segurad1");
    var pregunta_seguridad3 = document.getElementById("pregunta_seguridad3");
    var respuesta_segurad3 = document.getElementById("respuesta_segurad1");

    $.ajax({
        data: {
            function: "register_usuario",
            nickname: nickname.value,
            nombre: nombre.value,
            apellido: apelldio.value,
            telefono: telefono.value,
            correo: correo.value,
            pwd: pwd.value,
            pregunta_seguridad1: pregunta_seguridad1.value,
            respuesta_segurad1: respuesta_segurad1.value,
            pregunta_seguridad2: pregunta_seguridad2.value,
            respuesta_segurad2: respuesta_segurad2.value,
            pregunta_seguridad3: pregunta_seguridad3.value,
            respuesta_segurad3: respuesta_segurad3.value   
        },
        url: "http://localhost/chonspi/controller/usuario_ctrl.php",
        type: 'POST'
    }).done(function (respuesta) {
        /* respuesta = JSON.par(respuesta); */
        console.log(respuesta);
    });
}