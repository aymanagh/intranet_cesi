
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/connection.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
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
                            <button class="btn btn-lg btn-info btn-block" id="btnConnection">Envoyer</button>
                    </div>
                    <div class="text-center">
                        <a href="forgetPassword">Mot de passe oublié ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>