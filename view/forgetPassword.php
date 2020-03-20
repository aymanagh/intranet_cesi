
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
            <div class="panel panel-default my-5">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Mot de passe oublié ?</h2>
                  <p>Vous pouvez changer votre mot de passe ici.</p>
                  <div class="panel-body">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="adresse mail" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="changer de mot de passe" id="btnForget">
                      </div>
                      <div class="alert alert-info text-center" role="alert">
                        Mail envoyé ! Valable 1 heure.
                    </div>
                    <div class="alert alert-danger text-center" role="alert">
                        Adresse mail invalide !
                    </div>
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
</body>
</html>