$(document).ready(function()
{
   var i=2;
    $("#bt").click(function(){
        
        $(this).before('<textarea class="test" placeholder="Actividad '+ i +'"></textarea>');
        console.log("Vamos por aqui");
        i++;
    });   
}
);