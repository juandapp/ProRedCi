$(document).ready(function() {
console.log("msg");
    $("#loginform").ajaxForm({success: function(msg) {
            if(msg == "valido"){
                console.log(msg);
                $("#loginform").clearForm();
                window.location.replace("index.php?profile");
            }else{
                console.log(msg);      
                $("#errorlogin").text("Login Incorrecto");
                $("#loginform").resetForm();
            }
        }});
});