$('document').ready(function(){
    faq();
});
function faq(){
    $.ajax({
        url: "data/faq",
        type: "POST",
        async: true,
        data: "",
        dataType: "json",
        success : function(response, status){
           console.log(response);
           if(response != "Vide"){
            response.forEach(function(entry) {
                // built data template faq
                console.log(entry);

                var html = '<div class="row">';
                html += '<div id ="'+entry['id_faq']+'"class="col-sm-12">';
                html += '<p>Question : <br>' +entry['question']+'</p>';
                html += '<p class="font-weight-bold">Réponse : <br>' +entry['reponse']+'</p>';
                html += '</div></div><hr></hr>';

                $('#container-faq').append(html);
            })
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}
