<!DOCTYPE html>
<html>
    <head>
        <!-- import Header -->
        <?php include('header.php') ?>
        <title>Cloud numérique</title>
    </head>
    <body class="my-body">
        <!-- import Navbar -->
        <?php include('navbar.php')?>
        <div class="container container-cesi" style=" border-radius : 25px">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Téléchargez les cours numériques</h1><hr>
                    </br>
                </div>
            </div>
        
            <h2>Cours - (Promotion)</h2>
            
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Matière</th>
                    <th>Nom du cours</th>
                    <th>Intervenant</th>
                    <th>Télécharger / Uploader</th>
                </tr>
                </thead>

                <tbody id="displayCloud">
                    <!-- cloud.js -->
                <tr>
                    <td> <input id="inputMatiere" type="text" value=""></td>
                    <td> <input id="inputLibelle" type="text" value=""></td>
                    <td> </td>
                    <td> 
                    <input type="file" class="upload" id="upload" name="fileToUpload">
                    <button onclick = 'saveCloud(this)'>Uploader</button></td>
                </tr>
                </tbody>
            </table>
            </br>
        </div>
        
        <!-- Import Footer-->
        <section id="footer">
            <?php include('footer.php') ?>
        </section>
    </body>
    <script src="assets/js/cloud.js"></script>
</html>