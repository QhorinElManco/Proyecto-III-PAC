$(document).ready(function () {
    $("#desplegar").css('display', 'none');

    $("p").mouseenter(function () {
        $("#desplegar").show('slow');
    });

    $("p").mouseleave(function () {
        $("#desplegar").hide('slow');

    });
});

$("#btn-login").click(function () {
    $.ajax({
        url: "ajax/login.php",
        data: "&usuario=" + $("#Usuario").val() + "&password=" + $("#password").val(),
        dataType: JSON,
        method: "POST",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estatus == 1) {
                if (respuesta.tipoUsuario == "estudiante")
                    window.location.href = "estudiante.php";
                else if (respuesta.tipoUsuario == "docente")
                    window.location.href = "docente.php";
                else if (respuesta.tipoUsuario == "docente")
                    window.location.href = "coordinador-asignatura.php";
                else if (respuesta.tipoUsuario == "docente")
                    window.location.href = "coordinador-carrera.php";
                else if (respuesta.tipoUsuario == "docente")
                    window.location.href = "jefes-departamento.php";
            }
            else
                $("#alert").html('<span style="color:red;">Usuario y/o contraseña incorrecta</span>');
            
    }
    })
}