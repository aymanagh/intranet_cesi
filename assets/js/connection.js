$(document).ready(function() {
    $('#btnConnection').click(function() {
        var mail = $('#inputEmail').val();
        var mdp = $('#inputPassword').val();

        //alert(mail + " " + mdp);
        $.ajax({

            url: '../../controllers/controllers.php',
            type: 'POST',
            data: {
                mail: mail,
                mdp: mdp
            },
            success: function(data) {
                alert('Data: ' + data);
            },
            error: function(request, error) {
                alert("Request: " + request);
            }
        });
    });
});