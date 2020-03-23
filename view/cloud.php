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
                    <th>Date</th>
                    <th>Matière</th>
                    <th>Nom du cours</th>
                    <th>Intervenant</th>
                    <th>Télécharger / Uploader</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>12/02/85</td>
                    <td>MySQL</td>
                    <td>Base de données</td>
                    <td>Florian Pichon</td>
                    <td> <i class="fas fa-file-alt"></i> "Nom du cours" / selon le rôle
                        <form>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="customeFile">
                                <label class="custom-file-label" for="customFile">Sélectionnez le fichier</label>
                            </div>
                        </form>
                    <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                    </script> 
                </td>
                </tr>
                <tr>
                    <td>12/02/85</td>
                    <td>MySQL</td>
                    <td>Base de données</td>
                    <td>Florian Pichon</td>
                    <td>Fichier</td>
                </tr>
                <tr>
                    <td>12/02/85</td>
                    <td>MySQL</td>
                    <td>Base de données</td>
                    <td>Florian Pichon</td>
                    <td>Fichier</td>
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
</html>