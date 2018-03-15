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

    get id() {
        return this._id;
    }

    set titre(value) {
        this._titre = value;
    }

    set id(value) {
        this._id = value;
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


    static ajouter(title, content, date, id){

        $("#postit-list").append(' ' +
            '<ul id="' + id  + '" class="ul-postit">' +
            '                    <li class="li-postit">' +
            '                        <a class="a-postit">\n<div class="delete-postit">' +
            '<button type="button" class="btn btn-danger btn-sm delete-postit">X</button><h3 class="h3-date">' + date + '</h3></div>' +
            '                            <h2 class="h2-postit">'
            +  title+ '</h2>' +' <p class="p-postit">'+  content
            + '</p>' +
            '                        </a>' +
            '                    </li>' +
            '                </ul>');

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