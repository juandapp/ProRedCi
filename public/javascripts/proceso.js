$(document).ready(function()
{
    $(".test:last").blur(function() {
        $(this).parent().append('<textarea class="textActividad test" placeholder="Actividad 1"></textarea>');
    });
    
    
    var i = 2;
    $("#bt").click(function() {
        $(this).before('<div value="mmm"><textarea class="test" placeholder="Actividad ' + i + '"></textarea></div>');
        i++;
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

