function getValueFromInput(input){
    return $(`input[name=${input}]`).val();
}

$(document).ready(function () {

    $("#creer-postit").click(function () {
        $("#create-div").show();
        $("#submit").click(function () {


            var postIt = new PostIT(getValueFromInput('title'),
                getValueFromInput("contenu"),
                getValueFromInput("date"),
                getValueFromInput("mail"),
                getValueFromInput("heure"));

            console.log(postIt);
            if(postIt.creer() === 'success'){
                $('#potential-alert')
                    .show()
                    .addClass('alert-success')
                    .removeClass('alert-info')
                    .html("<b>Success </b> Votre post-it a été crée. Vous serez avertis le " + this.date + " par mail !");
            }
            else{
                alert('erreur');
            }
        });
    });
});
