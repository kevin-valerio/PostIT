class PostIt {

    constructor(titre, contenu, date, mail, heure) {
        this._titre = titre;
        this._contenu = contenu;
        this._date = date;
        this._mail = mail;
        this._heure = heure;
        this._status = 'success';
    }

    get titre() {
        return this._titre;
    }

    set titre(value) {
        this._titre = value;
    }

    get contenu() {
        return this._contenu;
    }

    set contenu(value) {
        this._contenu = value;
    }

    get date() {
        return this._date;
    }

    set date(value) {
        this._date = value;
    }

    get mail() {
        return this._mail;
    }

    set mail(value) {
        this._mail = value;
    }

    get heure() {
        return this._heure;
    }

    set heure(value) {
        this._heure = value;
    }
    get status() {
        return this._status;
    }

    set status(value) {
        this._status = value;
    }

    static ajouter(title, content){
        $("#postit-list").append(' <ul class="ul-postit">\n' +
            '                    <li class="li-postit">\n' +
            '\n' +
            '                        <a class="a-postit">\n' +
            '                            <h2 class="h2-postit">'
            +
            title
            + '</h2>\n' +
            '                            <p class="p-postit">'
            +
            content
            + '</p>\n' +
            '                        </a>\n' +
            '                    </li>\n' +
            '                </ul>\n');
    }

    creer(){

        $.ajax({
            url: '/engine/newpostit.php',
            type: 'POST',
            context: this,

            data: {
                titre:this._titre,
                contenu:this._contenu,
                date:this._date,
                mail:this._mail,
                heure:this._heure,
             },

        });

    }
}