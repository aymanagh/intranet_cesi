
$('document').ready(function(){
    displayCloud();
});
function displayCloud(){
    $.ajax({
        url: "data/displayCloud",
        type: "POST",
        async: true,
        data: "",
        dataType: "json",
        success : function(response, status){
          //console.log(response);
           if(response != "Vide"){
            response.forEach(function(entry) {
                
                var html = '<tr> <td  id="cloud_'+ entry['id_cloud'] +'" style="display :none"></td><td>'+ 
                entry['discipline'] +' </td><td>'+ entry['name'] +'</td><td> (nom Utilisateur) </td><td> filePDF/'+ entry['name_file'] +'</td></tr>';
                
                $('#displayCloud').append(html);
            })
           }
        },
        error: function(response, status){
           //console.log(response);
           //console.log(status);
        }
    });
}

/**
 * Function saveCloud()
 * @param {*} ele 
 */
function saveCloud(ele){
    // get value 
    var utilisateur = $(ele).parent().parent().find("#inputUtilisateur").val();
    var matiere = $(ele).parent().parent().find("#inputMatiere").val();
    var libelle = $(ele).parent().parent().find("#inputLibelle").val();

    // create form
    var formData = new FormData();
    formData.append('utilisateur', utilisateur);
    formData.append('matiere', matiere);
    formData.append('libelle', libelle);
    formData.append('fileToUpload', $(ele).parent().find("#upload")[0].files[0]);
  
    $.ajax({
        type: "POST",
        url: "data/cloud",
        data : formData,
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success : function(data){
           //console.log(data);
            if(data == "Erreur : Fichier obligatoirement en PDF"){
               alert("Erreur : Fichier obligatoirement en PDF")

            }else{
                document.location.href = "cloud";
            }
        },
        error : function(){
        }
    })
}