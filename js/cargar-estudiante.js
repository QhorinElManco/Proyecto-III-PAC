$(document).ready(function () {
    console.log("El DOM ha sido cargado, debe cargar la informarción del estudiante");
    ///Peticion AJAX la informacíon
    $.ajax({
        url: "ajax/cargar-estudiante.php",
        method: "GET",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $("#inf-tabla").html(
                `<div class="row">
                    <div class="col-lg-2">
                        <diV style="width:170px; height:180px;">
                            <img class="img-thumbnail img-responsive" src="${respuesta.urlImagen}" style="width:100%; height:100%;">
                        </div>
                    </div>
                    <div class="col-lg-10 ">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <th colspan="4" style="text-align: center; background-color: rgb(1, 49, 94);">
                                        Información Básica
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Nombre</th>
                                        <td>${respuesta.nombreCompleto}</td>
                                        <th>Cuenta</th>
                                        <td>${respuesta.numeroCuenta}</td>
                                    </tr>
                                    <tr>
                                        <th>Centro</th>
                                        <td>${respuesta.centro}</td>
                                        <th>Carrera</th>
                                        <td>${respuesta.carrera}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>`);
        },
        error: function (error) {
            console.log(error);
        }
    });
        $.ajax({
        url: "ajax/matricula.php?opcion=4",
        method: "POST",
        dataType: "json",
        data:parametros,
        success: function (respuesta) {
            console.log(respuesta);
            $("#clases matriculas").append(`
                <tr>
                <td>${respuesta.clase}</td>
                <td>${respuesta.seccion}</td>
                <td>${respuesta.UV}</td>
                <td>${respuesta.edificio}</td>
                <td>${respuesta.periodo}</td>
                <td>${respuesta.anio}</td>
            </tr>
            `)
        },
        error: function (error) {
            console.log(error);
        }
    });

});