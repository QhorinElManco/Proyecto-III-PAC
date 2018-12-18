$(document).ready(function () {

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
        }
    })
})
