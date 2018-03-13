function logout(){

    $.ajax({
        url:'/engine/logout.php',
        success: function(resp) {
            result = JSON.parse(resp);
            if(result.status === 'success') {
                $("#potential-alert")
                    .css("visibility", "visible")
                    .html("<b>Déconnecté ! </b> La déconnexion s'est effectuée avec succès");

                $("#hello-user").css("visibility", "hidden");
            } else {
                $('#potential-alert')
                    .addClass('alert-warning')
                    .removeClass('alert-info')
                    .css("visibility", "visible")
                    .html("<b>Erreure ! </b> La déconnexion s'est mal effectuée");
            }
        }
    });
}