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



    <div class="container-fluid">
        <div class="float-right" style="margin-top:20px; z-index:99">

            <form method="GET" class="form-inline center-text">
                <div style="margin-top: 50px" id="filter_promotion">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addPromoModal">
                        Ajouter une promo
                    </button>
                    <span class="font-weight-bold">Filtre : </span>
                    <select class="form-control data" id="data" name="data">
                    </select>
                    <button type="button" class="btn btn-secondary" id="filter"><i class="fas fa-search"></i></button>
                    <button type="reset" class="btn btn-secondary" id="reset"><i class="fas fa-undo-alt"></i></button>
                </div>

            </form>
        </div>
        <form method="POST">
            <table id="table" data-toggle="table" data-mobile-responsive="true" data-search="true" class="text-center table-borderless table-striped" style="border:none;">
                <thead>
                    <tr>
                        <th data-field="NOM" data-sortable="true">Nom</th>
                        <th data-field="PRENOM" data-sortable="true">Prénom</th>
                        <th data-field="ADRESSEMAIL" data-sortable="true">Adresse Mail</th>
                        <th data-field="Promo">Promo</th>
                        <th data-field="ModifyPromo">Modifier Promo</th>
                    </tr>
                </thead>
                <tbody id="datatable">

                </tbody>

            </table>

        </form>
    </div>



    <!-- Modal Add Promo -->
    <div class="modal fade" id="addPromoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une promo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nom : </label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Année : </label>
                        <input type="text" class="form-control" id="year">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary" id="submitPromo" data-dismiss="modal">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Modify Promo -->
    <div class="modal fade" id="modifyPromoModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier une promo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <input type="text" id="id_user" value="" hidden />
                    <form>
                        <div class="form-group">
                            <label for="promo">Promo : </label>
                            <select class="form-control data" id="dataPromo" name="data">
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary" id="modifyPromo" data-dismiss="modal">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Import Footer-->
    <section id="footer">
        <?php include('footer.php') ?>
    </section>

</body>



<script>

</script>

</html>