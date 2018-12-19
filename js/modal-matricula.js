$(document).ready(function () {
    $.ajax({
        url: "ajax/cargar-estudiante.php",
        method: "GET",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $("#carga").html(
                `   Estudiante: ${respuesta.nombreCompleto}<br>
                    cuenta: ${respuesta.numeroCuenta}<br>
                    Carrera: ${respuesta.carrera}<br>
                    UV Disponible: 25<br>
                    Periodo:  III Período<br>`);
        },
        error: function (error) {
            console.log(error);
        }
    });

    $('#bt_del').click(function () {
        eliminar(id_fila_selected);
    });
});
var cont = 0;
var id_fila_selected = [];

function seleccionar(id_fila) {
    if ($('#' + id_fila).hasClass('seleccionada')) {
        $('#' + id_fila).removeClass('seleccionada');
    }
    else {
        $('#' + id_fila).addClass('seleccionada');
    }

    id_fila_selected.push(id_fila);
}

function eliminar(id_fila) {

    for (var i = 0; i < id_fila.length; i++) {
        $('#' + id_fila[i]).remove();
    }

}
function cargarClases(id_modal) {
    $("slc-departamentos").remove();
    $("slc-clases").remove();
    $("slc-secciones").remove();
    $.ajax({
        url: "ajax/matricula.php?opcion=1",
        method: "GET",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
           for (var i = 0; i < respuesta.length; i++) {
              $("#slc-departamentos").append(`<option value="${respuesta[i]}">${respuesta[i]}</option>`);
           }
        },
        error: function (error) {
            console.log(error);
        }
    });

}
$("#slc-departamentos").change(function(){
    console.log("usuario seleccionado: " + $("#slc-departamentos").val());
    $.ajax({
        url:"ajax/matricula.php?opcion=2"+"&"
        +"departamento="+$("#slc-departamentos").val(),
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            console.log(respuesta);
            for (var i = 0; i < respuesta.length; i++) {
                $("#slc-clases").append(`<option value="${respuesta[i]}">${respuesta[i]}</option>`);
             }
        },
        error: function (error) {
            console.log(error);
        }
    })
})
$("#slc-clases").change(function(){
    console.log("usuario seleccionado: " + $("#slc-clases").val());
    $.ajax({
        url:"ajax/matricula.php?opcion=3"+"&"
        +"departamento="+$("#slc-clases").val(),
        method: "GET",
        dataType: "json",
        success:function(respuesta){
            console.log(respuesta);
            for (var i = 0; i < respuesta.length; i++) {
                $("#slc-secciones").append(`<option value="${respuesta[i].horaI} - ${respuesta[i].horaF}">${respuesta[i].horaI} - ${respuesta[i].horaF}</option>`);
             }
        },
        error: function (error) {
            console.log(error);
        }
    })
})
function matricular(id_modal) {
    var parametros="clase="+$("#slc-clases").val()+"&"
    +"seccion="+$("#slc-secciones").val();
    $.ajax({
        url: "ajax/matricula.php?opcion=4",
        method: "POST",
        dataType: "json",
        data:parametros,
        success: function (respuesta) {
            console.log(respuesta);
            $("#matriculadas").append(`
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

}

