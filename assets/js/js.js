$('document').ready(function(){ 

    $.ajax({
        url: "data/verifconnection",
        type: "POST",
        async: false,
        date: "",
        success : function(response, status){
            console.log(response);

            switch(response){
                case "token inexistant" :
                    document.location.href = "login";
                    break;
                case "token invalide" :
                    document.location.href = "login";
                    break;
                default : 
                    break;
            }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });


});