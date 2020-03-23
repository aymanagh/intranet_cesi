/**
 * Ajax Function chat
 * Display answers/questions about CESI
 */
$('document').ready(function(){
    window.setInterval(function(){
        showConnected();
        showMessage();
      }, 1000);

});

function showConnected(){
    $.ajax({
        url: "data/showConnected",
        type: "POST",
        async: true,
        data: "",
        dataType: "json",
        success : function(response, status){
           //console.log(response);
           $('#utilisateur').html('');
           if(response != "Vide"){
            response.forEach(function(entry) {
                
                var html = '<li id ="utilisateur'+entry['id_user']+'">';
                html += '<strong>'+entry['last_name']+' '+entry['first_name']+'</strong>';
                html += '</li>';

                $('#utilisateur').append(html);
            })
           }else{
                var html = '<li>';
                html += '<strong>Personne de connecté</strong>';
                html += '</li>';

                $('#utilisateur').append(html);
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
           //console.log(response);
           $('#message').html('');
           if(response != "Vide"){
            response.forEach(function(entry) {
                
                var html = '<li>';
                html += entry['last_name']+' '+entry['first_name']+' : <strong>'+entry['content']+'</strong>';
                html += '</li>';

                $('#message').append(html);
            })
           }else{
                var html = '<li>';
                html += '<strong>Pas de message à afficher</strong>';
                html += '</li>';

                $('#message').append(html);
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

    //alert(message);
    $.ajax({
        url: "data/insertMessage",
        type: "POST",
        async: true,
        data: {
            message: message
        },
        success : function(response, status){
            showMessage();
            $('#send').val('');
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}