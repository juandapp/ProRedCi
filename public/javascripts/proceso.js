$(document).ready(function()
{
   
    $("#bt").click(function(){
        $(this).before('<textarea class="test" placeholder="Actividad 1"></textarea>');
        console.log("Vamos por aqui");
    });   
}
);