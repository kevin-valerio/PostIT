class PostIT {
    constructor(titre, contenu, date, mail, heure) {
        this.titre = titre;
        this.contenu = contenu;
        this.date = date;
        this.mail = mail;
        this.heure = heure;
    }

    creer(){

        $.ajax({
            url: '/engine/newpostit.php',
            type: 'POST',
            data: {
                titre:this.titre,
                contenu:this.contenu,
                date:this.date,
                mail:this.mail,
                heure:this.heure,
             },

            success: resp => {
                let result = JSON.parse(resp);
                if (result.status === 'success') {
                   return 'success';
                }
                else{
                    return 'error';
                }
            }
        })

    }
}