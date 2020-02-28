<?php
include('header.php');
include('navbar.php');
?>

<body>
    <div class="container-fluid">
        <table id="table" data-toggle="table" data-search="true" data-show-columns="true" data-filter-control="true" data-show-search-clear-button="true" class="text-center">
            <thead>
                <tr>
                    <th data-field="NOM" data-sortable="true">Nom</th>
                    <th data-field="PRENOM" data-sortable="true">Prénom</th>
                    <th data-field="ADRESSEMAIL" data-sortable="true">Adresse Mail</th>
                    <th data-field="PROMO" data-filter-control="select">Promo</th>
                    <th data-field="ADMIN_USER"><div>Admin user</div><div><input type="checkbox" class="select-all checkbox active" name="select-all" /></div></th>
                </tr>
            </thead>
            <tbody>
                <tr data-title="bootstrap table">
                    <td>Jean</td>
                    <td data-value="Michel">Michele</td>
                    <td data-text="jean.michel@example.com">jean.michel@example.com</td>
                    <td data-value="PROMO 1">PROMO 1</td>
                    <td class="active"> <input type="checkbox" class="select-item checkbox" name="select-item" value="" /></td>
                </tr>
                <tr data-title="bootstrap table">
                    <td>Hugo</td>
                    <td data-value="Label">Label</td>
                    <td data-text="hugo.label@example.com">hugo.label@example.com</td>
                    <td data-value="PROMO 2">PROMO 2</td>
                    <td class="active"><input type="checkbox" class="select-item checkbox" name="select-item" value="" /></td>
                </tr>
            </tbody>
        </table>

        <button type="button" id="btn_connexion" class="btn btn-lg btn-light float-right" style="margin-top:10px; margin-right:35px">Enregistrer</button>
    </div>
</body>

</html>