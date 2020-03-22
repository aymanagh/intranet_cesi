<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/connection.js"></script>
</head>
<body class="my-body">
    <div class="container">
        <div class="row,  w3-animate-bottom">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Connexion - Intranet CESI</h5>
                            <label for="inputEmail">Adresse mail</label>
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" class="form-control" required autofocus>
                            </div><br>
                            <div class="form-label-group">
                                <label for="inputPassword">Mot de passe</label>
                                <input type="password" id="inputPassword" class="form-control" required>
                            </div>
                            <br>
                            <div class="alert alert-danger text-center" role="alert">
                                Mot de passe invalide !
                            </div>
                            <div class="alert alert-warning text-center dontexist" role="alert">
                                Compte non existant !
                            </div>
                            <div class="alert alert-warning text-center missing" role="alert">
                                Veuillez remplir tous les champs
                            </div>
                            <hr class="my-4">
                            <button class="btn my-btn btn-lg btn-block" id="btnConnection">Envoyer</button>
                        <div class="text-center">
                            <a href="forgetPassword">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>