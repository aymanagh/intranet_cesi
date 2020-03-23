<!DOCTYPE html>
<html>

<head>
    <!-- import Header -->
    <?php include('header.php') ?>
    <title>Administrateur promos</title>
</head>

<body>
    <?php
    include('navbar.php'); 

    ?>
<div class="container-fluid" id="container-promo" >
        <table id="table"  data-toggle="table" data-mobile-responsive="true" data-search="true" data-filter-control="true" class="text-center table-borderless table-striped" style="border:none;">
            <thead>
                <tr>
                    <th data-field="NOM" data-sortable="true">Nom</th>
                    <th data-field="PRENOM" data-sortable="true">Prénom</th>
                    <th data-field="ADRESSEMAIL" data-sortable="true">Adresse Mail</th>
                    <th data-field="Promo">Promo</th>
                    <th data-field="ADMIN_USER">
                        <div>Admin user</div>
                        <div><input type="checkbox" class="select-all checkbox active" name="select-all" /></div>
                    </th>
                </tr>
            </thead>
            <tbody id="data">

            </tbody>

        </table>

        <div class="row" id="div_btn_connexion">
            <div class="col-12">
                <button type="button" id="btn_connexion" class="btn btn-lg btn-light float-right" style="margin-top:10px; margin-right:35px">Enregistrer</button>
            </div>
        </div>
        
    </div>


    <!-- Import Footer-->
    <section id="footer">
        <?php include('footer.php') ?>
    </section>
</body>


</html>