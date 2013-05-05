$(document).ready(function()
{
    $(".test:last").blur(function(){
        $(this).parent().append('<textarea class="textActividad test" placeholder="Actividad 1"></textarea>');
        console.log("Vamos por aqui");
    });   
}
);