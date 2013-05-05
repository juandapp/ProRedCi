$(document).ready(function()
{
    $(".test:last").blur(function() {
        $(this).parent().append('<textarea class="textActividad test" placeholder="Actividad 1"></textarea>');
    });
    
    
    var i = 2;
    $("#btAgregar").click(function() {
        $(this).before('<h5>Actividad: '+i+'</h5><textarea class="test" id="actividad1" placeholder="Actividad ' + i + '"></textarea></div><br></br>');
        i++;
    });
    
    $("#btEliminar").click(function() {
        act = document.getElementById('actividad1');	
	if (!act){
		alert("El elemento selecionado no existe");
	} else {
		padre = act.parentNode;
		padre.removeChild(act);
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
    
    
});

