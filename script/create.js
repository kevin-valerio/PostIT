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
                PostIt.ajouter(getValueFromInput('title'), getValueFromInput('contenu'));
            }
            else {
                showMessage("error", '<b>Error </b> Une erreure est parvenue');
            }
        });
    });

    $.each(JSON.parse(getArticles()), function () {

        let title = this.titre;
        let content = this.contenu;

        PostIt.ajouter(title, content);

    })
});
