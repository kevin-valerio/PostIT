(function () {
    "use strict";

    function getValueFromInput(input) {
        return $(`input[name=${input}]`).val();
    }

    function getArticles() {
        let articles = null;
        $.ajax({
            url: '/engine/getpostit.php',
            async: false,
            success: resp => {
                articles = resp;

            }
        });
        return articles
    }

    function showMessage(type, contenu) {
        $('#potential-alert')
            .show()
            .addClass('alert-' + type)
            .removeClass('alert-info')
            .html(contenu);
    }

    $(document).ready(function () {

        //Création d'un post-it

        $("#creer-postit").click(function () {
            $("#create-div").show();
            $("#submit").click(function () {


                let postIt = new PostIt(getValueFromInput('title'),
                    getValueFromInput("contenu"),
                    getValueFromInput("date"),
                    getValueFromInput("mail"),
                    getValueFromInput("heure"));

                postIt.creer();

                if (postIt.status === 'success') {
                    showMessage("success", `<b>Success </b> Votre post-it a été crée. Vous serez avertis le ${getValueFromInput("date")} par mail !`);
                    PostIt.ajouter(getValueFromInput('title'), getValueFromInput('contenu'), getValueFromInput('date'));
                }
                else {
                    showMessage("error", '<b>Error </b> Une erreure est parvenue');
                }
            });
        });


        //Affichage des post-it

        $.each(JSON.parse(getArticles()), function () {

            let title = this.titre;
            let content = this.contenu;
            let date = this.date;
            let heure = this.heure;
            let id = this.id;

            PostIt.ajouter(title, content, date + ", " + heure, id);

        });

        //Suppression d'un post-it

        $(".delete-postit").click(function () {
            $("#" + $(this).parent().parent().parent().parent().attr('id')).remove();
            $.ajax({
                url: '/engine/delpostit.php',
                protocol: "GET",
                data: {
                    id: $(this).parent().parent().parent().parent().attr('id'), // Second add quotes on the value.
                },

            });
         })

    })
})();