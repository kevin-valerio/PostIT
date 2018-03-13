class PostIT {
    constructor(titre, contenu, date, mail) {
        this.titre = titre;
        this.contenu = contenu;
        this.date = date;
        this.mail = mail;
        this.creerPostit();
    }

    get getTitre() {
        return this.titre;
    }
    get getContenu() {
        return this.contenu;
    }
    get getDate() {
        return this.date;
    }
    get getMail() {
        return this.mail;
    }

    creerPostit(){
        let isConnected;
        $.ajax({
            url: '/engine/utils.php',
            success: function (resp) {
                isConnected = JSON.parse(resp);
            }
        });


        $.ajax({
            url: '/engine/newpostit.php',

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
            }
        })

    }
}