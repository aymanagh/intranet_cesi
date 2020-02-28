<?php
require("../connection.php");

if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
    //connection to check if user exist
    $response = [];

    //get value from js
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    //pdo
    $pdo = connectionPDO();
    $stmt = $pdo->prepare('SELECT * FROM utilisateur WHERE adresse_email = ? ');
    $stmt->bindParam(1, $mail, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();
    
    if(!empty($user)){
        if (password_verify($mdp, $user['mdp'])) {
            $response['message'] = "mot de passe valide";
        } else {
            $response['message'] = "mot de passe invalide";
        }
    }else{
        $response['message'] = "compte non existant";
    }

    closePDO($stmt);
}else if(!empty($_POST['mailForget'])){
    //connection to check if user exist
    $response = [];

    //get value from js
    $mail = $_POST['mailForget'];

    //pdo
    $pdo = connectionPDO();
    $stmt = $pdo->prepare('SELECT * FROM utilisateur WHERE adresse_email = ? ');
    $stmt->bindParam(1, $mail, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();
    closePDO($pdo);

    if(!empty($user)){
        //url value
        $mail = $user['adresse_email'];

        //create token and date
        $token = random_bytes(5);
        $token = bin2hex($bytes);
        $date = new DateTime();
        $date = $date->format('Y-m-d H:i:s');

        //insert token and date
        $pdo = connectionPDO();
        $stmt = $pdo->prepare("UPDATE utilisateur SET token = ?, date_token = ? WHERE adresse_email = ?");
        $stmt->bindParam(1, $token, PDO::PARAM_STR);
        $stmt->bindParam(2, $date, PDO::PARAM_STR);
        $stmt->bindParam(3, $mail, PDO::PARAM_STR);
        $stmt->execute();
        closePDO($pdo);

        ////prepare url and send mail
        $url = "http://localhost/cesi/intranet_cesi/view/resetPassword.php&reset=".$mail."?tok=".$token;

        $to      = 'ayman.agharbi@viacesi.fr';
        $subject = 'Changer de mot de passe';
        $message = 'Pour changer le mot de passe de votre accès à l"intranet CESI, cliquer sur l"url suivant : '.$url;
        $headers = array(
            'From' => 'cesi',
            'Reply-To' => $mail,
            'X-Mailer' => 'PHP/' . phpversion()
        );

        //$success = mail($to, $subject, $message, $headers);
        // if (!$success) {
        //     $errorMessage = error_get_last()['message'];
        // }
        $response['message'] = "compte existant";
        $response['url'] = $url;
    }else{
        $response['message'] = "compte non existant";
    }

    closePDO($stmt);
}
else if(!empty($_POST['inputPassword']) && !empty($_POST['mail']) && !empty($_POST['token'])){
    //connection to check if user exist
    $response = [];

    //get value from js
    $mail = $_POST['mail'];
    $password = $_POST['inputPassword'];
    $token = $_POST['token'];

    //pdo
    $pdo = connectionPDO();
    $stmt = $pdo->prepare('SELECT * FROM utilisateur WHERE adresse_email = ? AND token = ?');
    $stmt->bindParam(1, $mail, PDO::PARAM_STR);
    $stmt->bindParam(2, $token, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();
    
    if(!empty($user)){
        $mail = $user['adresse_email'];
        $token = $user['token'];
        $dateEndToken = $user['date_token'];
        
        $date = new DateTime();
        $date = $date->format('Y-m-d H:i:s');

        $response['message'] = "compte existant";
        $response['url'] = $url;
    }else{
        $response['message'] = "compte non existant";
    }

    closePDO($stmt);
} 
else{
    $response['error'] = 'nothing match';
}

$response = json_encode($response);
echo $response;



