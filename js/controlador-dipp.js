$(document).ready(function(){
	console.log("El DOM ha sido cargado, debe cargar todos los tweets e imprimirlos tal y como lo muestra el html estatico");
	///Peticion AJAX para obtener usuarios
	$.ajax({
		url:"ajax/carrera.php?opcion=1",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			$("#slc-usuario").append(`<option value=""></option>`);
			for(var i=0; i<respuesta.length;i++)
				$("#slc-carrera").append(`<option value="${respuesta[i].carrera}">${respuesta[i].carrera}</option>`);
		},
		error:function(error){
			console.log(error);
		}
    });

    $("#registra").click(function(){
        var parametros="nombreCompleto="+$("#nombreCompleto").val()+"&"
                        +"urlImagen="+$("#urlImagen").val()+"&"
                        +"dirección="+$("#dirección").val()+"&"
                        +"centro="+$("#centro").val()+"&"
                        +"carrera="+$("#slc-carrera").val()+"&"
                        +"numeroCuenta="+$("#numeroCuenta").val()+"&"
                        +"contraseña="+$("#contraseña").val();
        console.log(parametros);
        $.ajax({
            url:"ajax/registrarEstudiante.php?opcion=1", //este caso será guardar estudiante
            method:"POST",
            dataType:"json",
            data:parametros,
            success:function(respuesta){
                console.log(respuesta);
                $("#imagen-profile").html(
                    `<img src = "img/profile-pics/pajarito.png" class="img-fluid rounded-circle img-thumbnail">`
                    );
            },
            error:function(error){
                console.error(error);
            }
        });
        alert
    })
})