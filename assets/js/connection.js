$(document).ready(function() {
    $(".alert").hide();
    
    $('#btnConnection').click(function() {
        var mail = $('#inputEmail').val();
        var mdp = $('#inputPassword').val();
        //alert(mail + " " + mdp);
        
        $.ajax({
            url: 'data/connection',
            type: 'POST',
            data: {
                mail: mail,
                mdp: mdp
            },
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if(data['message'] == "mot de passe invalide"){
                    $(".alert").hide();
                    $(".alert-danger").show();
                }else if(data['message'] == "compte non existant"){
                    $(".alert").hide();
                    $(".dontexist").show();
                }else if(data['message'] == "Veuillez remplir tous les champs"){
                    $(".alert").hide();
                    $(".missing").show();
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

    $('#btnForget').click(function() {
        var mailForget = $('#email').val();
        //alert(mailForget);
        
        $.ajax({
            url: 'data/mailForget',
            type: 'POST',
            data: {
                mailForget: mailForget
            },
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if(data['message'] == "compte existant"){
                    $(".alert-info").show();
                    $(".alert-danger").hide();
                }else{
                    $(".alert-danger").show();
                    $(".alert-info").hide();
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

    if($_GET('reset') != null){
        $("#compte").html('compte : '+$_GET('reset'));

        $('#btnChangePassword').click(function() {
            var inputPassword = $('#inputPassword').val();
            var inputPassword2 = $('#inputPassword2').val();
            var mail = $_GET('reset');
            var token = $_GET('tok');

            if(inputPassword != inputPassword2){
                $(".alert").hide();
                $(".notsame").show();
            }else{
                $.ajax({
                    url: 'data/changePassword',
                    type: 'POST',
                    data: {
                        inputPassword: inputPassword,
                        inputPassword2: inputPassword2,
                        mail: mail,
                        token: token
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if(data['message'] == "le token a expiré"){
                            $(".alert").hide();
                            $(".fail").show();
                        }else if(data['message'] == 'mot de passe changé'){
                            $(".alert").hide();
                            $(".alert-success").show();
                        }else{
                            $(".alert").hide();
                            $('.alert-danger').show();
                            
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        //alert();
                        console.log(XMLHttpRequest);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });
            }
        
        });
    }
});

function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}