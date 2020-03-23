$('document').ready(function(){ 

    $.ajax({
        url: "data/checkConnection",
        type: "POST",
        async: false,
        data: "",
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
            response = response.split(':!');
            console.log(response);
            $("#namSpan").html(response[1]);
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
});

function deconnection(){
    $.ajax({
        url: "data/deconnection",
        type: "POST",
        async: false,
        data: "",
        success : function(response, status){
            document.location.href = "login";
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}



window.onbeforeunload = function (e) {
    this.deconnection();
};