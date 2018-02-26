$(document).ready(function() {
     $("#form-logout").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'engine/logout.php',
            success: function(resp) {
                result = JSON.parse(resp);
                if(result.status === 'success') {
                    alert("Vous avez été déconnecté !");
                    location('index.php');
                } else {
                    alert("Impossible de se deconnecter ...");
                }
            }
        });
    });
});