<!DOCTYPE html>
<html>
    <head>
        <!-- import Header -->
        <?php include('header.php') ?>
        <title>Evènements</title>
    </head>
    <body class="my-body" >
    <!-- import Navbar -->
    <?php include('navbar.php')?>
        <div id="container-event" class="container container-cesi" style="border-radius : 25px">
            <div class=row>
                <div class="text-center col-sm-12">
                    <h1>Administration des evènements</h1><button type="button" class="btn btn-info" onclick="addEvent()">Ajouter une question</button>
                    <br>
                </div>
            </div>
            <!-- Event -->
            <div class="container-fluid">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="th-sm">
                                Nom
                            </th>
                            <th class="th-sm">
                                Date
                            </th>
                            <th class="th-sm">
                                Location
                            </th>
                            <th class="th-sm">
                                Description
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tbodyAdminEvent">
                    </tbody>
                </table>
            </div>
            <!--End Event -->
        </div>
        <!-- Import Footer-->
        <section id="footer">
            <?php include('footer.php') ?>
        </section>
        <script src="assets/js/adminEvent.js"></script>
    </body>
</html>