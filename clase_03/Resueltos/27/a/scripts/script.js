$(document).ready( function(){

    $("#btn").click(function(){
       

       $.ajax({

            url:'http://localhost/Programacion/clase_03/Resueltos/27/a/destino.php',
            // dataType: 'json', / 'html' /'text' DATO QUE SE ESPERA
            type:'GET',
            data:{lado1: $('#lado1').val(), lado2: $('#lado2').val()},
            async: true, 
            beforeSend: function () {
                        $("#respuesta").html("<b>Cargando...</b>");
            },
            success: function (dataRespuesta){
                $("#respuesta").html(dataRespuesta);
            }

        })
        .done( function() {

             alert( 'Success!!' );

        })
        .fail( function(jqXHR, textStatus, errorThrown) { // function callback

             alert( 'Error!!:' + jqXHR.status + textStatus + errorThrown);

        })
        
       


    });

});