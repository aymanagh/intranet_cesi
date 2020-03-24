<!DOCTYPE html>
<html>
    <head>
        <!-- import Header -->
        <?php include('header.php') ?>
        <title>Administration FAQ</title>
    </head>
    <body class="my-body">
        <!-- import Navbar -->
        <?php include('navbar.php')?>
        <!-- Container -->
        <div id="container-faq" class="container container-cesi" style="border-radius : 25px">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>Administration de la FAQ</h3>
                    <button type="button" class="btn btn-info" onclick="addQ()">Ajouter un evènement</button>
                </div>
            </div>
            <div class="container-fluid">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="th-sm">
                                Question
                            </th>
                            <th class="th-sm">
                                Reponse
                            </th>
                            <th class="th-sm">
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tbodyAdminFAQ">
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Import Footer-->
        <section id="footer">
            <?php include('footer.php') ?>
        </section>
    </body>
    <!-- custom Script-->
    <script src="assets/js/adminFAQ.js"></script>
</html>