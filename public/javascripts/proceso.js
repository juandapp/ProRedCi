$(document).ready(function()
{
   var i=2;
    $("#bt").click(function(){
        
        $(this).before('<div value="mmm"><textarea class="test" placeholder="Actividad '+ i +'"></textarea></div>');
        console.log("Vamos por aqui");
        i++;
    });   
}
);