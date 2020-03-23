<!DOCTYPE html>
<html>
    <head>
        <!-- import Header -->
        <?php include('header.php') ?>
        <title>FAQ</title>
    </head>
    <body class="my-body">
        <!-- import Navbar -->
        <?php include('navbar.php')?>
        <!-- Container -->
        <div id="container-chat" class="container container-cesi" style="border-radius : 25px">
            <div class="row">
                <div class="col-8" id="salleMessage">
                    <p>Canal de discussion :</p>
                    <ul id="message">
                    </ul>                   
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Message ..." aria-describedby="basic-addon2" id='send'>
                        <button type="button" onclick="insertMessage()" class="btn btn-secondary">Envoyer le message</button>
                    </div>
                </div>
                <div class="col-4" id='userConnected'> 
                    <p>Utilisateurs connectés</p>
                    <input type="hidden" name="attentelogin" id="attentelogin" value="1">
                    <ul id="utilisateur">
                    </ul>
                </div>
            </div>

        </div>

        <!-- Import Footer-->
        <section id="footer">
            <?php include('footer.php') ?>
        </section>
    </body>
    <!-- custom Script-->
    <script src="assets/js/chat.js"></script>
</html>




