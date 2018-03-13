function moveCaseWrongPassword(id) {

    var div = document.getElementById(id);
    $(div).css('position', 'relative');
    for (var iter = 0; iter < 5 ; iter++) {
        $(div).animate({
            left: ((iter % 2 === 0 ? 10 : 10 * -1))
        }, 100);
    }
    $(div).animate({ left: 0 }, 100);
}

$(document).ready(function() {
     $("#login-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'engine/login.php',
            type:'POST',
            data: {
                mail:$("#mail").val(),
                password:$("#password").val()
            },
            success: function(resp) {
                result = JSON.parse(resp);
                  if(result.login === false) {
                      moveCaseWrongPassword("info");
                      $("#info").html("Les identifiants rentrés sont faux !")
                                .addClass("border border-danger border-top-0 rounded")
                                .css({
                                  'color' : 'red',
                                  'background-color' : 'white'
                               });

                  } else {

                      $("#info")

                          .html("Vous pouvez retournez à la <b><a href=\"/index.php\">page d'accueil</a></b>")
                          .addClass("border border-success border-top-0 rounded")
                          .css({
                              'color' : 'green',
                              'background-color' : 'white'
                          });
                  }
            }
        });
    });
});