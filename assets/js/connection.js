$(document).ready(function() {
    $('#btnConnection').click(function() {
        var mail = $('#inputEmail').val();
        var mdp = $('#inputPassword').val();

        //alert(mail + " " + mdp);
        $.ajax({
            url: '../controllers/controllers.php',
            type: 'POST',
            data: {
                mail: mail,
                mdp: mdp
            },
            success: function(data) {
                if (data == 'ok') {
                    alert('ok');
                    location.href = '../view/home.php';
                } else {
                    alert('nok');
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    });
});