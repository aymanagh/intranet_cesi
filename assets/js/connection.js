$(document).ready(function() {
    $(".alert-danger").hide();
    $(".alert-warning").hide();
    
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
                //console.log(data);
                if(data['message'] == "mot de passe invalide"){
                    $(".alert-danger").show();
                    $(".alert-warning").hide();
                }else if(data['message'] == "compte non existant"){
                    $(".alert-warning").show();
                    $(".alert-danger").hide();
                }else{
                    location.href = "../view/home.php";
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //alert();
                console.log(XMLHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    });
});