/**
 * Ajax Function faq
 * Display answers/questions about CESI
 */
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
            $('#divFAQ').html('');
            response.forEach(function(entry) {
                
                console.log(entry);
                // built html in template with datas
                var html = '<div id ="faq_'+entry['id_faq']+'"'+ 'class="col-sm-12">';
                html += '<p>Question : <br>' +entry['question']+'</p>';
                html += '<p class="font-weight-bold">Réponse : <br>' +entry['response']+'</p>';
                html += '</div><hr></hr>';
                
                $('#divFAQ').append(html);
            })
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}
