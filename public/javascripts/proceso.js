$(document).ready(function()
{
   var i=2;
    $("#btAgregar").click(function(){
        
        $(this).before('<h5>Actividad: '+i+'</h5><textarea class="test" id="actividad1" placeholder="Actividad '+ i +'"></textarea></div><br></br>');
        console.log("Vamos por aqui");
        i++;
    });  
    
    $("#btEliminar").click(function(){
        
        act = document.getElementById('actividad1');
        if (!act){
		alert("El elemento selecionado no existe");
	} else {
          
		padre = act.parentNode;
		padre.removeChild(act);
        i--;
    } 
});
});
	
	