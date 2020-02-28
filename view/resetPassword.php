
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/connection.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Changer le mot de passe - Intranet CESI</h5>
                        <h5 class="card-title text-center" id='compte'></h5>
                            <div class="form-label-group">
                                <label for="inputPassword2">Mot de passe</label>
                                <input type="password" id="inputPassword" class="form-control" required>
                            </div><br>
                            <div class="form-label-group">
                                <label for="inputPassword">Confirmer le mot de passe</label>
                                <input type="password" id="inputPassword2" class="form-control" required>
                            </div>
                            <hr class="my-4">
                            <button class="btn btn-lg btn-info btn-block" id="btnChangePassword">Changer</button>
                    </div>
                    <div class="alert alert-warning text-center" role="alert">
                        Rentrer le même mot de passe !
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>