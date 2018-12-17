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
function cargarClases(id_modal){
    $.ajax({
        url: "ajax/matricula.php",
        method: "GET",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $('#'+ id_modal).html(
                `AQUI`);
        },
        error: function (error) {
            console.log(error);
        }
    });

}
