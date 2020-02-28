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
            dataType: 'json',
            success: function(data) {
                console.log(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    });
});