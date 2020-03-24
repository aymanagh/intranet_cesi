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
           //console.log(response);
           if(response != "Vide"){
            $('#tbodyAdminFAQ').html('');
            response.forEach(function(entry) {
                
                //console.log(entry);
                var tr = "<tr><td>"+entry['question']+"</td>";
                tr += "<td>"+entry['response']+"</td>";
                tr += "<td><button id='"+entry['id_faq']+"' onclick='deleteQ(this)' type='button' class='btn btn-warning'>Supprimer</button></td></tr>";
                
                $('#tbodyAdminFAQ').append(tr);
            })
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}


function deleteQ(e){
    var id = e.id;

    $.ajax({
        url: "data/deleteQ",
        type: "POST",
        async: true,
        data: ({
            id: id
        }),
        success : function(response, status){
        //console.log(response);
        faq();
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
    
}


function addQ(){
    if($('#newQ').length){
        
    }else{
        var tr = "<tr id='newQ'><td><textarea rows='2' cols='25' id='textareaQ'></textarea></td>";
        tr += "<td><textarea rows='2' cols='25' id='textareaR'></textarea></td>";
        tr += "<td><button onclick='deleteNewQ()' type='button' class='btn btn-warning'>Supprimer</button><button onclick='saveQ()' type='button' class='btn btn-success' style='margin-left:10px'>Ajouter</button></td></td></tr>";

        $('#tbodyAdminFAQ').prepend(tr);
    }

}

function deleteNewQ(){
    $('#newQ').remove();
}

function saveQ(){
    var question = $('#textareaQ').val();
    var response = $('#textareaR').val();

    $.ajax({
        url: "data/saveQ",
        type: "POST",
        async: true,
        data: ({
            question: question,
            response: response
        }),
        success : function(response, status){
        //console.log(response);
        faq();
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });    

}