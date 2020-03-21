<?php

require("../connection.php");
/**
 * Ce handler découpe l'url et les parametres post et redirige vers la bonne fonction
 */
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');

//require_once('../Controller/DBController.php');

if (!isset($_SESSION)) {
    session_start();
}

/**
 * Class Handler
 */
class Handler {
    /**
     * Ce controller prend en paramètres le type de données que l'on souhaite récupérer
     * Il va lancer la fonction qui correspond et renvoyer le json au fichier restcontroller
     * @param $type
     * @return string
     */
    function HandlerController($type) {
        date_default_timezone_set('Europe/Paris');

        switch ($type) {
            case "connection":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->connection();
                } else {
                    $result = "Erreur:GSx0002";
                }
                break;
            case "mailForget":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->mailForget();
                } else {
                    $result = "Erreur:GSx0002";
                }
                break;
            case "changePassword":
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $result = $this->changePassword();
                } else {
                    $result = "Erreur:GSx0002";
                }
                break;
            default:
                $result = "Erreur:GSx0003";
                break;
        }
        return $result;
    }
  
    /**
     * @function connexion
     * Connexion de l'utilisateur par Arca avec son IPN et son mot de passe
     */
    function connection() {
        $response = [];

        if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
            //connection to check if user exist
        
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
            $response['message'] = "Veuillez remplir tous les champs";
        }
    
        $response = json_encode($response);
        echo $response;
    }

    function mailForget() {
        $response ="erreur";

        if(!empty($_POST['mailForget'])){
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
                $token = bin2hex($token);
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
                $url = "http://localhost/intranet_cesi/resetPassword?reset=".$mail."&tok=".$token;
        
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
            }
        }
        $response = json_encode($response);
        echo $response;
    }

    function changePassword() {
        $response ="erreur";

        if(!empty($_POST['inputPassword']) && !empty($_POST['mail']) && !empty($_POST['token'])){
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
        
                //$response['message'] = "compte existant";

                $date1 = new DateTime($dateEndToken);
                $date2 = new DateTime($date);
                
                $diff = $date2->diff($date1);
                
                $hours = $diff->h;
                $hours = $hours + ($diff->days*24);

                if(($hours < 1) && ($token == $user['token'])){
                    $mdp = password_hash($password, PASSWORD_DEFAULT);

                    $pdo = connectionPDO();
                    $stmt = $pdo->prepare("UPDATE utilisateur SET mdp = ? WHERE adresse_email = ?");
                    $stmt->bindParam(1, $mdp, PDO::PARAM_STR);
                    $stmt->bindParam(2, $mail, PDO::PARAM_STR);
                    $stmt->execute();
                    closePDO($pdo);  
                    
                    $response['message'] = 'mot de passe changé';
                }else{
                    $response['message'] = 'le token a expiré';
                }
                
            }else{
                $response['message'] = "compte non existant";
            }
        
            closePDO($stmt);
        }
        
        $response = json_encode($response);
        echo $response;
    }
}




