/**
 * Ajax Function chat
 * Display answers/questions about CESI
 */
$('document').ready(function(){
    showConnected();
    showMessage()
});

function showConnected(){
    $.ajax({
        url: "data/showConnected",
        type: "POST",
        async: true,
        data: "",
        dataType: "json",
        success : function(response, status){
           console.log(response);
           if(response != "Vide"){
            response.forEach(function(entry) {
                
                var html = '<li id ="utilisateur'+entry['id_utilisateur']+'">';
                html += '<strong>'+entry['nom']+' '+entry['prenom']+'</strong>';
                html += '</li>';

                $('#utilisateur').append(html);
            })
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}


function showMessage(){
    $.ajax({
        url: "data/showMessage",
        type: "POST",
        async: true,
        data: "",
        dataType: "json",
        success : function(response, status){
           console.log(response);
           if(response != "Vide"){
            response.forEach(function(entry) {
                
                var html = '<div>';
                html += '<strong>'+entry['nom']+' '+entry['prenom']+' : '+entry['message']+'</strong>';
                html += '</div>';

                $('#message').append(html);
            })
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}

function insertMessage(){
    var message = $('#send').val();

    alert(message);
    $.ajax({
        url: "data/insertMessage",
        type: "POST",
        async: true,
        data: {
            message: message
        },
        dataType: "json",
        success : function(response, status){

        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}