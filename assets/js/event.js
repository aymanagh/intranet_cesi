/**
 * Ajax Function event
 * Display Cesi's event
 */
$('document').ready(function(){
    event();
});
function event(){
    $.ajax({
        url: "data/event",
        type: "POST",
        async: true,
        data: "",
        dataType: "json",
        success : function(response, status){
           console.log(response);
           if(response != "Vide"){
            response.forEach(function(entry) {
                
                console.log(entry);
                // built html in template with datas
                var html = '<div id=event_'+entry['id_evenement']+'> <div class="row">';
                html += '<div class="col-sm-12"><h4>'+entry['libelle']+'</h4></div></div>';
                html += '<div class="row"><div class="col-sm-4"><img src="assets/cesi.jpg" alt="photo" style="width: 100%;"></div>';
                html += '<div class="col-sm-2 text-center"><p>'+entry['date']+'</p></div>';
                html += '<div class="col-sm-6"><p>'+entry['contenu']+'</p></div>';
                html += '</div></div><hr>';
                
                $('#container-event').append(html);
            })
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}
