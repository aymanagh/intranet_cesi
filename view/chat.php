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
            <div class="" id="salle">
                <p>Utilisateurs connectés</p>
                <input type="hidden" name="attentelogin" id="attentelogin" value="1">
                <ul id="utilisateur">
                </ul>
                <p>Canal de discussion</p>

                <ul id="message">
                </ul>                   
                <input type="text" name="send" id="send" placeholder="Message...">
                <p><input type="button" id="send-button" onclick="insertMessage()" class="button" value="Envoyer le message"></p>
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




