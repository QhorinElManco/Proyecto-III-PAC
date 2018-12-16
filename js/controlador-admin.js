$("#btn-login").click(function () {
    $.ajax({
        url: "ajax/login-administrativo.php",
        data: "id=" + $("#idEmpleado").val() + "&password=" + $("#password").val() + "&tipoUsuario=" + $("#slc-usuario").val(),
        dataType: "json",
        method: "POST",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.estatus == 1) {
                if (respuesta.tipoUsuario == "direccion")
                    window.location.href = "direccion-academica.php";//redireccionar
                else if (respuesta.tipoUsuario == "dipp")
                    window.location.href = "dipp.php";//redireccionar
            } else
                $("#alert").html('<span style="color:red;">Cuenta y/o contraseña incorrecta</span><br><span style="color:red;">Asegurese de seleccionar su tipo de usuario</span>');
        },
        error: function (error) {
            console.error(error);
        }
    });
});