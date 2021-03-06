<!DOCTYPE html>
<html>
    <head>
        <!-- import Header -->
        <?php include('header.php') ?>
        <title>Administrateur profil</title>
    </head>

<body>
    <?php
    include('navbar.php'); ?>
    
    <div class="container-fluid">
        <table id="table" data-toggle="table" data-search="true" data-filter-control="true" class="text-center table-borderless table-striped" style="border:none;">
            <thead>
                <tr>
                    <th data-field="NOM" data-sortable="true">Nom</th>
                    <th data-field="PRENOM" data-sortable="true">Prénom</th>
                    <th data-field="ADRESSEMAIL" data-sortable="true">Adresse Mail</th>
                    <th data-field="PROMO" data-filter-control="select">Promo</th>
                </tr>
            </thead>
            <tbody>
                <tr data-title="bootstrap table">
                    <td>Jean</td>
                    <td data-value="Michel">Michele</td>
                    <td data-text="jean.michel@example.com">jean.michel@example.com</td>
                    <td data-value="PROMO 1">PROMO 1</td>
                </tr>
                <tr data-title="bootstrap table">
                    <td>Hugo</td>
                    <td data-value="Label">Label</td>
                    <td data-text="hugo.label@example.com">hugo.label@example.com</td>
                    <td data-value="PROMO 2">PROMO 2</td>
                </tr>
                <tr data-title="bootstrap table">
                    <td>Hugo</td>
                    <td data-value="Label">Label</td>
                    <td data-text="hugo.label@example.com">hugo.label@example.com</td>
                    <td data-value="PROMO 2">PROMO 2</td>
                </tr>
                <tr data-title="bootstrap table">
                    <td>Hugo</td>
                    <td data-value="Label">Label</td>
                    <td data-text="hugo.label@example.com">hugo.label@example.com</td>
                    <td data-value="PROMO 2">PROMO 2</td>
                </tr>
                <tr data-title="bootstrap table">
                    <td>Hugo</td>
                    <td data-value="Label">Label</td>
                    <td data-text="hugo.label@example.com">hugo.label@example.com</td>
                    <td data-value="PROMO 2">PROMO 2</td>
                </tr>
                <tr data-title="bootstrap table">
                    <td>Hugo</td>
                    <td data-value="Label">Label</td>
                    <td data-text="hugo.label@example.com">hugo.label@example.com</td>
                    <td data-value="PROMO 2">PROMO 2</td>
                </tr>
                <tr data-title="bootstrap table">
                    <td>Hugo</td>
                    <td data-value="Label">Label</td>
                    <td data-text="hugo.label@example.com">hugo.label@example.com</td>
                    <td data-value="PROMO 2">PROMO 2</td>
                </tr>
            </tbody>
            
        </table>
        
    </div>


    <!-- Import Footer-->
    <section id="footer">
        <?php include('footer.php') ?>
    </section>
</body>


</html>