/**
 * Ajax Function event
 * Display Cesi's profil user filter by session user
 */
$('document').ready(function(){
    face();
});
function face(){
    $.ajax({
        url: "data/face",
        type: "POST",
        async: true,
        data: "",
        dataType: "json",
        success : function(response, status){
          //console.log(response);
           if(response != "Vide"){
            var test = ""; 

            response.forEach(function(entry) {
                
               //console.log(entry);
                // built html in template with datas
                // result request filter by promo with email session user
                test = '<div class="col-sm-12" ><h3>PROMOTION : '+entry['nomPromo']+'</h3></div></div><hr>'
                // for each on user filter by promo 
                var html = 
                    '<div class="text-center card border-dark mb-3 mt-1 ml-1 mr-1" style="width: 13rem;">'+
                        '<img class=" card-img-top " src="assets/cesi.jpg" alt="Card image cap">'+
                        '<div class="card-body  ">'+
                            '<h5 class="card-title">'+entry['last_name']+' '+entry['first_name']+'</h5>'+
                            '<p class="card-text">Promo : '+entry['nomPromo']+'</br>Apprenant (rôle)</p>'+
                            '<div class="row border-top border-dark">'+
                                '<div class="col-sm-6">'+
                                    '<a href="mailto:'+entry['address']+'"><span title="Contacter Chuck Norris"><i class="far fa-envelope"></i></span></a>'+
                                '</div>'+
                                '<div class="col-sm-6">'+
                                    '<a href="" data-toggle="modal" data-target="#fiche_'+entry['id_user']+'">'+
                                        '<span title="Profil détaillé"><i class="far fa-address-card"></i></span></a>'+
                            '<!-- Modal -->'+
                                            '<div class="modal fade" id="fiche_'+entry['id_user']+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">'+
                                                '<div class="modal-dialog" role="document">'+
                            '<!-- Modal content-->'+
                                                    '<div class="modal-content">'+
                                                        '<div class="modal-header" style ="background: #ffc853" >'+
                                                            '<h5 class="modal-title color-cesi-black" id="exampleModalLongTitle">Fiche détaillée : '+entry['last_name']+' '+entry['first_name']+'</h5>'+
                                                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                                                '<span aria-hidden="true">&times;</span>'+
                                                            '</button>'+
                                                        '</div>'+
                            '<!-- Modal body -->'+
                                                        '<div class="modal-body">'+
                                                            '<div class="container-fluid">'+
                                                                '<div class="row ">'+
                                                                    '<!-- Photo -->'+
                                                                    '<div id="imageContainer" class="  col-md-4 ">'+
                                                                        '<img src="assets/cesi.jpg" alt="photo" style="width: 100%;">'+
                                                                    '</div>'+
                                                                    '<!-- yellow decorator -->'+
                                                                    '<div class="col-md-1 ml-auto"style="background: #ffc853" ></div>'+
                                                                    '<!-- Informations -->'+
                                                                    '<div class=" test col-md-7 ml-auto text-left">'+
                                                                        '<span class="blockquote-footer">Promotion : '+entry['nomPromo']+'</span></br>'+
                                                                        '<span class="blockquote-footer">Campus : CESI (ville) </span></br>'+
                                                                        '<span class="blockquote-footer">Entreprise : (nom entreprise) </span></br>'+
                                                                    '</div>'+
                                                                '</div>'+
                                                                '</br>'+
                            '<!-- Mail -->'+
                                                                '<div class="row ">'+
                                                                    '<div class="col-md-12 ml-auto h4" ><a href="mailto:'+entry['address']+'">'+entry['address']+'</a></div>'+
                                                                '</div>'+                         
                                                            '</div>'+
                                                        '</div>'+
                            '<!-- Footer -->'+
                                                        '<div class="modal-footer " style="background: #ffc853">'+
                                                            '<button type="button" class="btn my-btn" data-dismiss="modal">Fermer</button>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                 '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                $('#container-face').append(html);
            });
            $('#container-face-promotion').append(test);
           }
        },
        error: function(response, status){
           //console.log(response);
           //console.log(status);
        }
    });
}