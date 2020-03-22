$('document').ready(function(){
    faq();
});
function faq(){
    $.ajax({
        url: "data/faq",
        type: "POST",
        async: true,
        data: "",
        dataType: "",
        success : function(response, status){
           console.log(response);
           if(response != "Vide"){
            response.forEach(function(entry) {
                // built data template faq

            })
           }
        },
        error: function(response, status){
            console.log(response);
            console.log(status);
        }
    });
}
