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
            $('#tbodyAdminEvent').html('');
            response.forEach(function(entry) {
                
                console.log(entry);

                var tr = "<tr><td>"+entry['name']+"</td>";
                tr += "<td>"+entry['date']+"</td>";
                tr += "<td>"+entry['location']+"</td>";
                tr += "<td>"+entry['content']+"</td>";
                tr += "<td><button id='"+entry['id_event']+"' onclick='deleteEvent(this)' type='button' class='btn btn-warning'>Supprimer</button></td></tr>";
                
                $('#tbodyAdminEvent').append(tr);
            })
           }else{
                $('#tbodyAdminEvent').html('');
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}

function deleteEvent(e){
    var id = e.id;

    $.ajax({
        url: "data/deleteEvent",
        type: "POST",
        async: true,
        data: ({
            id: id
        }),
        success : function(response, status){
           console.log(response);
           event();
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
    
}


function addEvent(){
    if($('#newEvent').length){
        
    }else{
        var tr = "<tr id='newEvent'><td><input id='inputNom' type='text'></td>";
        tr += "<td><input type='date' id='inputDate'></td>";
        tr += "<td><input id='inputLocation' type='text'></td>";
        tr += "<td><textarea rows='2' cols='25' id='textarea'></textarea></td>";
        tr += "<td><button onclick='deleteNewEvent()' type='button' class='btn btn-warning'>Supprimer</button><button onclick='saveEvent()' type='button' class='btn btn-success' style='margin-left:10px'>Ajouter</button></td></tr>";
        
        $('#tbodyAdminEvent').prepend(tr);
    }

}

function deleteNewEvent(){
    $('#newEvent').remove();
}

function saveEvent(){
    var nom = $('#inputNom').val();
    var date = $('#inputDate').val();
    var location = $('#inputLocation').val();
    var textarea = $('#textarea').val();

    $.ajax({
        url: "data/saveEvent",
        type: "POST",
        async: true,
        data: ({
            nom: nom,
            date: date,
            location: location,
            textarea: textarea
        }),
        success : function(response, status){
           console.log(response);
           event();
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });    

}
