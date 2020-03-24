$('document').ready(function () {
    promo();
    user();

    $('#modifyPromoModal').hide();

    function promo() {
        $.ajax({
            url: "data/promo",
            type: "POST",
            async: true,
            data: "",
            dataType: "json",
            success: function (response, status) {
                console.log(response);
                if (response != "Vide") {
                    response.forEach(function (entry) {
                        console.log(entry);

                        var html = '<option value="' + entry['id_promotion'] + '">' + entry['name'] + '</option>';


                        $('.data').append(html);

                    })
                }
            },
            error: function (response, status) {
                console.log(response);
                console.log(status);
            }
        });
    }

    function user(){
        $.ajax({
            url: "data/user",
            type: "POST",
            async: true,
            data: "",
            dataType: "json",
            success: function (response, status) {
                console.log(response);
                if (response != "Vide") {
                    if(!$('#datatable').html('')){
                        $('#datatable').html('');
                    }
                    response.forEach(function (entry) {
                        console.log(entry);

                        var table = '<tr>';
                        table += '<td data-value="' + entry['first_name'] + '">' + entry['first_name'] + '</td>';
                        table += '<td data-value="' + entry['last_name'] + '">' + entry['last_name'] + '</td>';
                        table += '<td data-text="'+ entry['address']+ '">' + entry['address'] +'</td>';
                        table += '<td data-value="' + entry['id_promotion'] + '">' + entry['name'] + '</td>';
                        table += '<td data-value="'+ entry['id_user']+'" ><button type="button" id="'+entry['id_user'] +'" data-toggle="modal" data-target="#modifyPromoModal" onClick="showModal(this)"><i class="fas fa-pencil-alt"></button></td>';
                        table += '</td>';

                        $('#datatable').append(table);
                        $('#hidden').hide();
                        
                        $('.no-records-found').hide();


                    })
                }
            },
            error: function (response, status) {
                console.log(response);
                console.log(status);
            }
        });
    }

    $('#reset').click(function () {
        if(!$('#datatable').html('')){
            $('#datatable').html('');
            
        }
        user();

    });

    

    $('#filter').click(function () {
        var promo = $('#data').val();

        $.ajax({
            url: "data/userFilter",
            type: "GET",
            data: { promo: promo },
            dataType: "json",

            success: function (response, status) {
                console.log(response);
                if (response != "Vide") {
                    if(!$('#datatable').html('')){
                        $('#datatable').html('');
                    }
                    
                    response.forEach(function (entry) {
                        console.log(entry);
                        

                        var table = '<tr>';
                        table += '<td data-value="' + entry['first_name'] + '">' + entry['first_name'] + '</td>';
                        table += '<td data-value="' + entry['last_name'] + '">' + entry['last_name'] + '</td>';
                        table += '<td data-text="'+ entry['address']+ '">' + entry['address'] +'</td>';
                        table += '<td data-value="' + entry['id_promotion'] + '">' + entry['name'] + '</td>';
                        table += '<td data-value="Modification"><a data-toggle="modal" data-target="#modifyPromoModal" id="'+ entry['id_user']+'"><i class="fas fa-pencil-alt"></a></td>';
                        table += '</td>';


                        $('#datatable').append(table);
                        $('#hidden').hide();
                        
                        $('.no-records-found').hide();
                    })
                } else {
                    console.log("C'est beau la vue");
                }
            },
            error: function (response, status) {
                console.log(response);
                console.log(status);
                console.log("C'est beau la vue");
            }
        });

    });



    $('#submitPromo').click(function () {
        var name = $('#name').val();
        var year = $('#year').val();


        $.ajax({
            url: "data/submitPromo",
            type: "POST",
            data: {name: name, year: year },
            dataType: "json",

            success: function (data) {
               
            },
            error: function (response, status) {
                console.log(response);
                console.log(status);
                console.log("C'est beau la vue");
            }
        });

    });

    $('#modifyPromo').click(function () {
        var id = $('#id_user').val();
        var promo = $('#dataPromo').val();

        $.ajax({
            url: "data/modifyPromo",
            type: "POST",
            data: {id: id, promo: promo },

            success: function (response, status) {
                console.log(response);
                user();
            },
            error: function (response, status) {
                console.log(response);
                console.log(status);
                console.log("C'est beau la vue");
            }
        });

    });


});
function showModal(e){
    var id = e.id;
    $('#id_user').attr('value', id);

    $('#modifyPromoModal').show();

};