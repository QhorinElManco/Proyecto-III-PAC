$(document).ready(function() {
    $("#desplegar").css('display','none');	
    
    $("p").mouseenter(function() {
        $("#desplegar").show('slow');
    });
                    
    $("p").mouseleave(function() {
        $("#desplegar").hide('slow');

    });
});