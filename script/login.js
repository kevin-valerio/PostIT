$(document).ready(function() {
     $("#login-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'engine/login.php',
            type:'POST',
            data: {
                mail:$("#mail").val(),
                password:$("#password").val()
            },
            success: function(resp) {
                result = JSON.parse(resp);
                 if(result.login === false) {
                    alert("Nn");
                } else {
                    alert("yes");
                }
            }
        });
    });
});