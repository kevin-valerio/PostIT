$(document).ready(function() {

    $("#create-postit").click(function () {
        $.ajax({
            url: '/engine/utils.php',
            success: function (resp) {
                var result = JSON.parse(resp);
                if (result === false) {

                    //On est pas connecté, on peut pas créer de post-it

                    $('#potential-alert')
                        .addClass('alert-warning')
                        .removeClass('alert-info')
                        .css("visibility", "visible")
                        .html("<b>Erreur ! </b> Vous devez être connecté pour pouvoir créer un post-it");
                }
                else {
                    window.location = "create.php";

                }
            }
        })
    })
});
