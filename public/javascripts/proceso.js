$(document).ready(function()
{
    var i = 2;

    $("#btAgregar").click(function() {
//        $("#actividades").append('<h5>Actividad: ' + i + '</h5>\n\
//<textarea class="test" id="actividad' + i + '" placeholder="Actividad ' + i + '"></textarea></div><br></br>');
        $("#actividades").append('<div class="separatorIn"><h3>' + i + ' -</h3><input class="input" id="actividad' + i + '" placeholder="Paso ' + i + '"/></div>');
        i++;
    });

//    $("#btEliminar").click(function() {
//        act = document.getElementById('actividad1');
//        if (!act) {
//            alert("El elemento selecionado no existe");
//        } else {
//            padre = act.parentNode;
//            padre.removeChild(act);
//        }
//    });

    $("#btEliminar").click(function() {
        if (i > 2) {
            $("#actividades div:last").remove();
            i--;
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


});

