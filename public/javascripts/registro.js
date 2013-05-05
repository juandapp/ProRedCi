$(document).ready(function() {
    $("#username").blur(
            function() {
                $.ajax(
                        {
                            url: "index.php?registro&usernameajax",
                            data: {"username": $(this).val()},
                            type: "post"
                        }

                ).done(function(msg) {
                    var newParrafo = document.createElement("p");
                    newParrafo.appendChild(document.createTextNode(msg));
//                        $("#divUsername").append('<p>'+msg+'</p>');
                    //$("#divUsername").append(newParrafo);
                    
                    if (msg == "si usar") {
                        $("#username").css("background-color", "#72BF56");
                    } else {
                        $("#username").css("background-color", "#FA393D");
                    }
                        
                });

            }
    );

});