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
        url: "ajax/login-pregrado.php",
        data: "cuenta=" + $("#cuenta").val() + "&password=" + $("#password").val() + "&tipoUsuario=" + $("#slc-usuario").val(),
        dataType: "json",
        method: "POST",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estatus == 1) {
                if (respuesta.tipoUsuario == "estudiante")
                    window.location.href = "estudiante.php";//redireccionar
                else if (respuesta.tipoUsuario == "docente")
                    window.location.href = "docente.php";//redireccionar
            } else
                $("#alert").html('<span style="color:red;">Cuenta y/o contraseña incorrecta</span><br><span style="color:red;">Asegurese de seleccionar su tipo de usuario</span>');
        },
        error: function (error) {
            console.error(error);
        }
    });
});
