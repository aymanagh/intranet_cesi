$('document').ready(function(){
    adminPromos();

    function adminPromos(){
        $.ajax({
            url: "data/adminPromos",
            type: "POST",
            async: true,
            data: "",
            dataType: "json",
            success : function(response, status){
               //console.log(response);
               if(response != "Vide"){
                response.forEach(function(entry) {
                    //console.log(entry);
                    
                    var html = '<tr>';
                    html += '<td>Jean</td>';
                    html += '<td data-value="Michel">Michele</td>';
                    html += '<td data-text="jean.michel@example.com">jean.michel@example.com</td>';
                    html += '<td data-value="'+ entry['id_promotion'] +'">' + entry['name'] +'</td>';
                    html += '<td class="active"> <input type="checkbox" class="select-item checkbox" name="select-item" value="" /></td>';
                    html += '</td>';
                    
                    $('#data').append(html);
                })
               }
            },
            error: function(response, status){
                console.log(response);
                console.log(status);
            }
        });
    }
});

