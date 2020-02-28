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
}else{
    $response['error'] = 'nothing match';
}

$response = json_encode($response);
echo $response;



