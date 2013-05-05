$(document).ready(function()
{
    
    
    var nActividades = 1;

    $("#btAgregar").click(function() {
        console.log("ash");
        nActividades++;
        $("#actividades").append('<div class="separatorIn"><h3>' + nActividades + ' -</h3><input class="input" id="actividad' + nActividades + '" placeholder="Paso ' + nActividades + '"/></div>');
        
    });

    $("#btEliminar").click(function() {
        if (nActividades >= 2) {
            $("#actividades div:last").remove();
            nActividades--;
        }
    });

    $("#mas").click(function() {
        console.log($("#etiquetas input:last").attr("class"));
        $("#etiquetas").append('<input type="text" class="input" placeholder="">');
    });


    $("#menos").click(function() {
        console.log("menos");
        $("#etiquetas input:last").remove();
    });


    $("#nombreparrafo").click(function() {
        $.ajax(
                {
                    url: "index.php?proceso&registrar",
                    data: {"name": $("#tituloproceso").val()},
                    type: "post"
                }

        ).done(function(msg) {
            $("#tituloproceso").prop('disabled', true);
            console.log(msg);
        });

    });

    $("#hecho").click(function() {
        
        var datos = {};
        
        datos['name'] = $("#tituloproceso").val();
        
        if($("#descripcion").val()){
            datos['description'] = $("#descripcion").val();
        }
        for (var i = 1; i<=nActividades; i++){
            datos["actividad"+i] = $("#actividad"+i).val();
        }
        datos['nActividades'] = nActividades;
        datos['etiqueta'] = $("#etiqueta").val();


        $.ajax(
                {
                    url: "index.php?proceso&registrar",
                    data: datos,
                    type: "post"
                }

        ).done(function(msg) {
            $("#tituloproceso").prop('disabled', true);
            console.log(msg);
        });
        
    });
    
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });

});

