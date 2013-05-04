$(document).ready(function() {

    $("#loginform").ajaxForm({success: function(msg) {
            if(msg == "valido"){
                console.log(msg);
                $("#loginform").clearForm();
                window.location.replace("index.php?registro");
            }else{
                console.log(msg);
//                        
                $("#errorlogin").text("No Valido");
                
            }
        }});
});